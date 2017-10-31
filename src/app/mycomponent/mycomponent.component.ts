import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-mycomponent',
  templateUrl: './mycomponent.component.html',
  styleUrls: ['./mycomponent.component.css']
})
export class MycomponentComponent implements OnInit {
child = "Hello word";
myVar = true;
players: any[];
goalPlus:boolean = true;
goalLess:boolean = true;
  constructor() { 
    
  }

  ngOnInit() {
    this.players = [
      {name:'Messi', match:17, buts:12},
      {name:'Dybala', match:17, buts:13},
      {name:'Ronaldo', match:17, buts:8},
      {name:'Bazile', match:17, buts:9},
      {name:'Cavani', match:17, buts:10},
      {name:'Neymar', match:17, buts:6},
      {name:'Zlatan', match:17, buts:6}
  ]
  }

  hidden(){
     return  this.myVar = !this.myVar
    // console.log(this.var);
  }

}
