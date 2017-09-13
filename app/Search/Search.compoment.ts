import {Component, Input, Directive, Pipe, ElementRef, ViewChild, ViewChildren} from '@angular/core';
import {FormGroup, FormControl, Validators, FormBuilder} from '@angular/forms';
import {ExpenseService} from "../services/expense";
import {Book} from '../services/book';

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
    ExpenseServices: ExpenseService;

    Options: any;
    GroupOptions: any;

    constructor(e: ExpenseService) {
        this.ExpenseServices = e;
        this.DoneTypingInterval = 2000;
        this.SearchForm = new FormGroup({
            name: new FormControl(),
            poperator1: new FormControl("≈"),
            poperator2: new FormControl("≈"),
            price1: new FormControl(),
            price2: new FormControl(),
        });
    }

    ngOnInit() {
        this.Options = {
            category_ids: [],
            subcategory_ids: [],
            name: '',
            price: [],
            last: '',
            from: '',
            end: '',
        }

        if (this.isJson(this.parameters)) {
            this.p = JSON.parse(this.parameters);
            for (var k in this.p) {
                this.p3[k] = new Array();
                if (this.p[k][0]) {
                    for (var l in this.p[k][0].data) {
                        var obj = {
                            name: this.p[k][0].data[l],
                            id: l,
                            type: this.p[k][0].type,
                        }
                        this.p3[k].push(obj);
                    }
                }
                if (this.p[k][1]) {
                    for (var l in this.p[k][1].data) {
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

    OnClickUpdateCategory(category_id, user_category_id, index, ccategory_checkbox) {
<<<<<<< HEAD
=======


        console.log( this.Options.subcategory_ids);

/*
        if(this.Options.subcategory_ids.length > 0){
            for(var k in this.Options.subcategory_ids){
                if(this.Options.subcategory_ids[k].category_id !== undefined){
>>>>>>> 8aab7b3d571146cc2e9172696e283646ae5085fa


        var temp = this.Options.subcategory_ids;
        if (ccategory_checkbox.checked == false) {
            if (this.Options.subcategory_ids.length > 0) {
                for (var i = this.Options.subcategory_ids.length - 1; i >= 0; i--) {
                    if (this.Options.subcategory_ids[i].category_id == category_id) {

                        this.Options.subcategory_ids.splice(i, 1);
                    }
                }
            }
        }

        if (ccategory_checkbox.checked == true) {
            if (category_id !== undefined) {
                this.Options.category_ids.push({type: "c", id: category_id});
            }
            if (user_category_id !== undefined) {
                this.Options.category_ids.push({type: "uc", id: user_category_id});
            }
            for (var i = 0; i < this.s._results[index].nativeElement.children.length; i++) {
                this.s._results[index].nativeElement.children[i].childNodes[1].checked = true;
            }
        }
        else if (ccategory_checkbox.checked == false) {
            for (var i = 0; i < this.s._results[index].nativeElement.children.length; i++) {
                this.s._results[index].nativeElement.children[i].childNodes[1].checked = false;
            }

            for (var k in this.Options.category_ids) {
                if (this.Options.category_ids[k].id == category_id && this.Options.category_ids[k].type == "c") {
                    this.Options.category_ids.splice(k, 1);
                }
                else if (this.Options.category_ids[k].id == user_category_id && this.Options.category_ids[k].type == "uc") {
                    this.Options.category_ids.splice(k, 1);
                }
            }
        }

        this.ExpenseServices.SearchReports(this.Options);
        */
    }

<<<<<<< HEAD
    OnCLickUpdateSubCategory(category_id, user_category_id, id, type, category_index, sc) {


=======
    OnCLickUpdateSubCategory(category_id, user_category_id, id, type, category_index, subcategory) {
>>>>>>> 8aab7b3d571146cc2e9172696e283646ae5085fa
        if (this.s._results[category_index].nativeElement.parentElement.children[0].checked == true) {
            this.s._results[category_index].nativeElement.parentElement.children[0].checked = false;
        }

        for (var k in this.Options.category_ids) {
            if (this.Options.category_ids[k].id == category_id && this.Options.category_ids[k].type == "c") {
                this.Options.category_ids.splice(k, 1);
            }
            else if (this.Options.category_ids[k].id == user_category_id && this.Options.category_ids[k].type == "uc") {
                this.Options.category_ids.splice(k, 1);
            }
        }

<<<<<<< HEAD
        if (sc.checked == true) {
=======
        if(subcategory.children[0].checked == true) {
>>>>>>> 8aab7b3d571146cc2e9172696e283646ae5085fa
            this.Options.subcategory_ids.push({
                id: id,
                type: type,
                category_id: category_id,
                user_category_id: user_category_id,
            });
        }
<<<<<<< HEAD
        else {
            for (k in  this.Options.subcategory_ids) {
                if (this.Options.subcategory_ids[k].id == id) {
=======
        else if(subcategory.children[0].checked == false) {
            for(var k in this.Options.subcategory_ids){
                if(this.Options.subcategory_ids[k].id == id){
>>>>>>> 8aab7b3d571146cc2e9172696e283646ae5085fa
                    this.Options.subcategory_ids.splice(k, 1);
                }
            }
        }
<<<<<<< HEAD

        console.log(this.Options.subcategory_ids);
=======
>>>>>>> 8aab7b3d571146cc2e9172696e283646ae5085fa
        this.ExpenseServices.SearchReports(this.Options);
    }


    OnClickUpdateName(name) {
        var that = this;
        if (name.length > 2) {
            this.Options.name = name;
        }
        else if (name.length == 0) {
            this.Options.name = '';
        }
        clearTimeout(this.NameTypingTimer);
        this.NameTypingTimer = setTimeout(function (index) {
            return function () {
                that.DoneTyping(index)
            }
        }(this.ExpenseServices), this.DoneTypingInterval);
    }

    OnClickUpdatePrice(operator, price, index) {
        var that = this;
        if (this.isNumeric(price)) {
            this.Options.price[index] = {operator: operator, price: price};
        }
        clearTimeout(this.TypingTimer);
        this.TypingTimer = setTimeout(function (index) {
            return function () {
                that.DoneTyping(index)
            }
        }(this.ExpenseServices), this.DoneTypingInterval);
    }

    DoneTyping(e) {
        e.SearchReports(this.Options);
    }

    OnChangeLastTime(value) {
        this.Options.last = value;
        this.ExpenseServices.SearchReports(this.Options);
    }

    OnChangeFromDate(date) {
        this.Options.from = date;
    }

    OnChangeEndDate(date) {
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