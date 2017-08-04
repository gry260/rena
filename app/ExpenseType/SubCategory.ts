import {Component, Input, Directive,} from '@angular/core';
import {FormGroup, FormControl, Validators, FormBuilder} from '@angular/forms';
import {Http, Response} from '@angular/http';
import {Injectable} from '@angular/core';
import 'rxjs/add/operator/map';
import {ExpenseService} from "../services/expense";
import { CategoryComponent } from "app/ExpenseType/Category";

@Component({
    selector: 'crudSubcategory',
    templateUrl: 'app/ExpenseType/SubCategoryTemplate.php'
})

export class SubCategoryComponent{
    categorySubTypeForm: FormGroup;
    expenseServices: ExpenseService;
    listCategories: any;
    constructor(e: ExpenseService)
    {
        this.expenseServices =e;
        this.listCategories = CategoryComponent.get();
    }
    ngOnInit() {
        this.listCategories = CategoryComponent.get();
        this.categorySubTypeForm = new FormGroup({
            category_obj: new FormControl(''),
            name: new FormControl('poke'),
        });
    }
    onSubmit(value) {
        this.expenseServices.addExpenseSubCategoryType({
            name: value.name,
            category_id: value.category_obj.id,
            type: value.category_obj.t,
        });
        return;
    }

    addCategory(categoryID, Name) {
        this.listCategories.push({
            id: categoryID,
            name: Name,
            t: "u"
        });
    }






}