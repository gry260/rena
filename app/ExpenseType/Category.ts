import {Component, Input, Directive,} from '@angular/core';
import {FormGroup, FormControl, Validators, FormBuilder} from '@angular/forms';
import {Http, Response} from '@angular/http';
import {Injectable, ViewChild} from '@angular/core';
import 'rxjs/add/operator/map';
import {ExpenseService} from "../services/expense";
import {SubCategoryComponent} from "app/ExpenseType/SubCategory";

@Component({
    selector: 'crudcategory',
    templateUrl: 'app/ExpenseType/CategoryTemplate.php'
})

export class CategoryComponent {
    @Input() categories;
    e: ExpenseService;
    s: SubCategoryComponent;
    categoryTypeForm;
    http: Http;
    static listCategories: any;
    SubCategoryObj: any;

    constructor(e: ExpenseService, s: SubCategoryComponent, h: Http) {
        this.s = s;
        this.e = e;
        this.http = h;
    }

    ngOnInit() {
        if (this.isJson(this.categories)) {
            CategoryComponent.listCategories = JSON.parse(this.categories);
            this.SubCategoryObj = new SubCategoryComponent(this.e);
        }
        this.categoryTypeForm = new FormGroup({
            name: new FormControl('fff'),
        });
    }

    isJson(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }

    static get(){
        return CategoryComponent.listCategories;
    }
    onSubmit(value) {
        this.http.get('app/ExpenseType/ControllerActions.php?a=addcategorytype&user_id=3&name=' + value.name).
            map((res: Response) => res.text()).subscribe(data => {
            this.SubCategoryObj.addCategory(data.trim(), value.name);
            }, error => {
        });
    }

}