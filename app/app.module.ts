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
import { CategoryKeyWords } from "./ExpenseType/Expense";
import { ExpenseComponent} from "./ExpenseType/Expense";
import { ProfileComponent} from "./Users/Profile.components";
import { SearchComponent } from "./Search/Search.compoment";
import {UserService} from "./services/user";


@NgModule({
    imports:      [ BrowserModule, ReactiveFormsModule, HttpModule],
    declarations: [ AppComponent, CategoryComponent, SubCategoryComponent, ExpenseComponent, ProfileComponent, SearchComponent],
    bootstrap:    [ AppComponent],
    providers: [ExpenseService, UserService, CategoryComponent, SubCategoryComponent],
})


export class AppModule { }
