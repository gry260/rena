import {Component, Input, Directive, Pipe, ElementRef,  ViewChild, ViewChildren} from '@angular/core';
import {FormGroup, FormControl, Validators, FormBuilder} from '@angular/forms';
import {ExpenseService} from "../services/expense";
import { Book } from '../services/book';

@Component({
  selector: 'search',
  templateUrl: 'app/Search/Search.php'
})
export class SearchComponent {


  @Input() parameters;
  SearchForm: any;
  p = new Array();
  p2 = new Array();
  p3 = new Array();
  s: any;
  @ViewChildren('sc3') s: ElementRef;
  DoneTypingInterval: number;
  TypingTimer: any;
  NameTypingTimer: any;
  ExpenseServices;

  Options: any;
  GroupOptions: any;

  constructor(e: ExpenseService) {
    this.ExpenseServices = e;
    this.Options = {
      category_ids: [],
      subcategory_ids: [],
      name : '',
      price:[],
      last: '',
      from: '',
      end: '',
    }
    this.DoneTypingInterval = 2000;
    this.SearchForm =  new FormGroup({
        name: new FormControl(),
        poperator1: new FormControl("≈"),
        poperator2: new FormControl("≈"),
        price1: new FormControl(),
        price2: new FormControl(),
    });
  }

  ngOnInit() {
    if (this.isJson(this.parameters)) {
      this.p = JSON.parse(this.parameters);
      console.log(this.p);
      for(var k in this.p){
        this.p3[k] = new Array();
        if(this.p[k][0]){
          for(var l in this.p[k][0].data){
            var obj = {
              name: this.p[k][0].data[l],
              id: l,
              type: this.p[k][0].type,
            }
            this.p3[k].push(obj);
          }
        }
        if(this.p[k][1]){
          for(var l in this.p[k][1].data){
            var obj = {
              name: this.p[k][1].data[l],
              id: l,
              type: this.p[k][1].type,
            }
            this.p3[k].push(obj);
          }
        }
      }
    }
  }

  ngAfterViewInit() {

  }

  OnClickUpdateCategory(category_id, user_category_id, index, ccategory_checkbox){
    if(ccategory_checkbox.checked == true) {
      if(category_id !== undefined) {
        this.Options.category_ids.push({type: "c", id: category_id});
      }
      if(user_category_id !== undefined) {
        this.Options.category_ids.push({type: "uc", id: user_category_id});
      }
      for (var i = 0; i < this.s._results[index].nativeElement.children.length; i++) {
        this.s._results[index].nativeElement.children[i].childNodes[1].checked = true;
      }
    }
    else if(ccategory_checkbox.checked == false){
      for (var i = 0; i < this.s._results[index].nativeElement.children.length; i++) {
        this.s._results[index].nativeElement.children[i].childNodes[1].checked = false;
      }
      for(var k in this.Options.category_ids){
        if(this.Options.category_ids[k].id == category_id && this.options.category_ids[k].type == "c") {
          this.Options.category_ids.splice(k,1);
        }
        if(this.Options.category_ids[k].id == user_category_id && this.options.category_ids[k].type == "uc") {
          this.Options.category_ids.splice(k,1);
        }
      }
    }

    let food = {name: 'bbb'};
    this.ExpenseServices.SearchReports(this.Options, food);
  }

  OnClickUpdateName(name) {
    if(name.length > 2){
      this.Options.name = name;
    }
    else if(name.length == 0){
      this.Options.name = '';
    }

    clearTimeout(this.NameTypingTimer);
    this.NameTypingTimer = setTimeout(this.DoneTyping, this.DoneTypingInterval);
  }

  OnClickUpdatePrice(operator, price, index){
    if(this.isNumeric(price)) {
      this.Options.price[index] = {operator: price};
    }
    clearTimeout(this.TypingTimer);
    this.TypingTimer = setTimeout(this.DoneTyping, this.DoneTypingInterval);
  }

  DoneTyping()
  {
  }

  OnChangeLastTime(value){
    this.Options.last = value;
  }

  OnChangeFromDate(date){
    this.Options.from = date;
  }

  OnChangeEndDate(date){
    this.Options.end = date;
  }

  isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  }

  isJson(str) {
    try {
      JSON.parse(str);
    } catch (e) {
      return false;
    }
    return true;
  }

}