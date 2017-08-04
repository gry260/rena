import {Component} from '@angular/core';
import {FormGroup, FormControl} from '@angular/forms';
import {Http, Response} from '@angular/http';
import 'rxjs/Rx';
import 'rxjs/add/operator/map';




@Component({
    selector: 'register',
    templateUrl: 'app/Users/Register.php'
})
export class RegisterComponent {
    form;
    http: Http;
    userServe: UserService;
    people: any;

    constructor(private http: Http) {

    }
    ngOnInit() {
    }

    onSubmit(formValues, f) {


        this.userServe.getData()
            .subscribe(
                people => this.people = people,
                error => console.error('Error: '),
                () => console.log(this.people.glossary.title)
            );
    }
}