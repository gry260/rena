import { Directive, HostBinding, Input, HostListener } from '@angular/core';


@Directive ({
  selector : '[autoC]'
})


export class AutoComplete {
  @HostBinding('class.is-hover') hovering = false;
  @HostListener('keyup') onMasdfasdfouseLeave(){
    this.hovering = false;
  };

  @Input() set autoC(value){
    this.hovering = true;
  }




}