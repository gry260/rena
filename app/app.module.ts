import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppComponent }  from './app.component';
import { RegisterComponent }  from './Users/Register.component';
import { LoginComponent} from "./Users/Login.components";
import { CategoryComponent} from "./ExpenseType/Category";
import { SubCategoryComponent} from "./ExpenseType/SubCategory";
import { FormsModule } from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { ExpenseService } from "./services/expense";
import { ExpenseComponent} from "./ExpenseType/Expense";


@NgModule({
    imports:      [ BrowserModule, ReactiveFormsModule, HttpModule],
    declarations: [ AppComponent, CategoryComponent, SubCategoryComponent, ExpenseComponent],
    bootstrap:    [ AppComponent],
    providers: [ExpenseService, CategoryComponent, SubCategoryComponent, ExpenseComponent],
})


export class AppModule { }
