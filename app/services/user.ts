import { Http, Response } from '@angular/http';
import { Injectable } from '@angular/core';
import 'rxjs/add/operator/map';
import {Observable} from 'rxjs/Rx';


@Injectable()
export class UserService
{
    constructor(private http: Http)
    {
    }
    getData(){
       return this.http
            .get('app/test.json')
            .map(response => response.json())
    }


    data= [1,2,3,4,5];
}