import {Component, Input, Directive, Pipe} from '@angular/core';



@Component({
  selector: 'search',
  templateUrl: 'app/Search/Search.php'
})
export class SearchComponent {

  @Input() parameters;
  p = new Array();
  p2 = new Array();
  p3 = new Array();


  constructor(){

  }
  ngOnInit() {

    if (this.isJson(this.parameters)) {
      this.p = JSON.parse(this.parameters);
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

      console.log(this.p3);
    }


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