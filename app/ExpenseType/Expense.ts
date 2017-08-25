import {Component, Input, Directive, Pipe} from '@angular/core';
import {FormGroup, FormControl, Validators, FormBuilder} from '@angular/forms';
import {Http, Response} from '@angular/http';
import {Injectable, ViewChild} from '@angular/core';
import 'rxjs/add/operator/map';
import {ExpenseService} from "../services/expense";
import {CategoryComponent} from "app/ExpenseType/Category";


@Component({
  selector: 'expense',
  templateUrl: 'app/ExpenseType/ExpenseTemplate.php'
})


export class ExpenseComponent {
  @Input() Expenses;
  ExpensesArray: any;
  ExpenseForm: any;
  ListCategories: any;
  ListSubCategories: any;
  ExpenseService: ExpenseService;
  IsUpdate : boolean;

  user_id: number;
  name: string;
  price: any;
  date: string;
  comment: string;
  date_enterd: string;
  subcategory_id: number;
  user_category_id: number;
  category_id: number;
  user_category_id: number;

  constructor(e: ExpenseService) {
    this.ListCategories = CategoryComponent.get();
    this.ExpenseService = e;
    this.IsUpdate = false;
  }

  ngOnInit() {
    if (this.isJson(this.Expenses)) {
      this.ExpensesArray = JSON.parse(this.Expenses);
    }
    this.ExpenseForm = new FormGroup({
      category_obj: new FormControl(''),
      subcategory: new FormControl(''),
      name: new FormControl('name'),
      price: new FormControl('13.12'),
      date: new FormControl('2015-06-12'),
      comment: new FormControl('c'),
      id: new FormControl(''),
    });
    this.ListCategories = CategoryComponent.get();

  }

  onChange(id, type) {
    if (id.includes(":")) {
      var res = id.split(":");
      id = parseInt(res[1].trim());
    }
    this.ExpenseService.GetSubCategory(id, type.options[type.selectedIndex].getAttribute("class")).subscribe((data) => {
      this.ListSubCategories = data;
    }, error => {
    });
  }

  onSubmit(c, subcategory_obj, name, price,date, comment, id) {

    var SubmittedObj = {
      user_id: 3,
      id: id.value != null ? id.value : null,
      name: name.value != null ? name.value : null,
      price: price.value != null ? price.value : null,
      date: date.value != null ? date.value : null,
      comment: comment.value != null ? comment.value: null,
      category_id: c.options[c.selectedIndex].getAttribute("class") == 'c' ? parseInt(c.value) : null,
      user_category_id: c.options[c.selectedIndex].getAttribute("class") == 'u' ? parseInt(c.value) : null,
      subcategory_id: subcategory_obj.options[subcategory_obj.selectedIndex].getAttribute("class") == 'c' ? parseInt(subcategory_obj.value) : null,
      user_subcategory_id: subcategory_obj.options[subcategory_obj.selectedIndex].getAttribute("class") == 'u' ? parseInt(subcategory_obj.value) : null,
    }

    if(this.IsUpdate === true){
      this.ExpenseService.UpdateExpense(SubmittedObj).subscribe(
        data => {
          console.log()
        },
        err => console.log(err),
        () => console.log('Request Completed')
      );
      for (var i in this.ExpensesArray) {
        if(this.ExpensesArray[i].id == SubmittedObj.id){
          for(var k in SubmittedObj){
            this.ExpensesArray[i][k] = SubmittedObj[k];
          }
        }
      }
    }
    else {
      this.ExpenseService.AddExpense(SubmittedObj).subscribe(
        err => console.log(err),
        () => console.log('Request Completed')
      );
    }


  }

  isJson(str) {
    try {
      JSON.parse(str);
    } catch (e) {
      return false;
    }
    return true;
  }

  onDelete(id){
    this.ExpenseService.removeExpense(id).subscribe(data => {
      for (var i in this.ExpensesArray) {
        if(this.ExpensesArray[i].id == id){
          this.ExpensesArray.splice(i, 1);
          return;
        }
      }
    });
  }

  searchExpenseById(ExpenseID) {
    for (var i in this.ExpensesArray) {
      if (ExpenseID == this.ExpensesArray[i].id) {
        let type = (this.ExpensesArray[i].user_category_id) ? 'u': 'c';
        this.ExpenseService.GetSubCategory(parseInt(this.ExpensesArray[i].category_id), type).subscribe((data) => {
          this.ListSubCategories = data;
        }, error => {
        });
        this.ExpenseForm = new FormGroup({
          category_obj: new FormControl(parseInt(this.ExpensesArray[i].category_id)),
          subcategory: new FormControl(parseInt(this.ExpensesArray[i].subcategory_id)),
          name: new FormControl(this.ExpensesArray[i].name),
          price: new FormControl(this.ExpensesArray[i].price),
          date: new FormControl(this.ExpensesArray[i].date),
          comment: new FormControl(this.ExpensesArray[i].comment),
          id: new FormControl(this.ExpensesArray[i].id),
        });
      }
    }
    this.IsUpdate = true;
  }


  onUpdate(obj, c)
  {

  }

}