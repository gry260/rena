import {Http, Response, Headers, RequestOptions, HttpModule} from "@angular/http";
import {Injectable} from '@angular/core';
import 'rxjs/add/operator/map';

@Injectable()
export class ExpenseService {
  http: Http;
  private text;
  private data;
  private b;

  constructor(private h: Http) {
    this.http = h;
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
      this.text = data;
      console.log(this.text.trim());
    }, error => {
      console.log(error.json());
    });
  }

  addExpenseSubCategoryType(data) {
    return this.http.get('app/ExpenseType/ControllerActions.php?a=addsubcategorytype&user_id=3&type=' + data.type + '&category_id=' + data.category_id + '&name=' + data.name).subscribe(data => {
      console.log(data);
    }, error => {
      console.log(error.json());
    });
  }
}
