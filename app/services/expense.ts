import {Http, Response, Headers, RequestOptions, HttpModule} from "@angular/http";
import {Injectable } from '@angular/core';
import 'rxjs/add/operator/map';

import { Observable } from 'rxjs/Observable';

// Observable class extensions
import 'rxjs/add/observable/of';
import 'rxjs/add/observable/throw';

// Observable operators
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/debounceTime';
import 'rxjs/add/operator/distinctUntilChanged';
import 'rxjs/add/operator/do';
import 'rxjs/add/operator/filter';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/switchMap';


@Injectable()
export class ExpenseService {
  http: Http;
  private text;
  private data;
  private b;

  constructor(private h: Http) {
    this.http = h;
  }

  GetCategoryKeyWords(cid) : Observable<any>
  {
    let headers = new Headers({ 'Content-Type': 'application/json' });
    let options = new RequestOptions({ headers: headers });
    let body = JSON.stringify({'cid':cid});
    return this.http.post('app/ExpenseType/ControllerActions.php', body, options);
  }

  SearchReports(parameters): Observable<any>
  {
    let headers = new Headers({ 'Content-Type': 'application/json' });
    let options = new RequestOptions({ headers: headers });
    let body = JSON.stringify(parameters);
    return this.http.post('app/Search/SearchSubmit.php', body, options);
  }

  GetSubCategory(category_id, type) {
    return this.http.get('app/ExpenseType/ControllerActions.php?a=getsubcategory&category_id=' + category_id + '&type=' + type).map(res => {
      // If request fails, throw an Error that will be caught
      if (res.status < 200 || res.status >= 300) {
        throw new Error('This request has failed ' + res.status);
      }
      else {
        return res.json();
      }
    });
  }

  AddExpense(obj) {
    let par = '';
    if (obj) {
      for (k in obj) {
        if (obj[k] !== null) {
          par += '&' + k + "=" + obj[k];
        }
      }
    }
    return this.http.get('app/ExpenseType/ControllerActions.php?a=addexpense' + par).map((res: Response) => res.text());
  }

  UpdateExpense(obj){
    let par = '';
    if (obj) {
      for (k in obj) {
        if (obj[k] !== null) {
          par += '&' + k + "=" + obj[k];
        }
      }
    }
    return this.http.get('app/ExpenseType/ControllerActions.php?a=updateexpense' + par).map((res: Response) => res.text());
  }

  addExpenseType(data) {
    this.http.get('app/ExpenseType/ControllerActions.php?a=addcategorytype&user_id=3&name=' + data.name).map((res: Response) => res.text()).subscribe(data => {
    }, error => {
      console.log(error.json());
    });
  }

  removeExpense(id)
  {
    return this.http.get('app/ExpenseType/ControllerActions.php?a=removeexpenseid&id='+id).map((res: Response) => res.text());
  }

  addExpenseSubCategoryType(data) {
    return this.http.get('app/ExpenseType/ControllerActions.php?a=addsubcategorytype&user_id=3&type=' + data.type + '&category_id=' + data.category_id + '&name=' + data.name).map((res: Response) => res.text());
  }
}
