import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-be-fruit',
  template: '<h2>Be Fruit ! </h2>' +
  '<ul><li *ngFor="let fruit of fruits">{{fruit}}</li></ul>',
  styleUrls: ['./fruit.component.css']
})
export class FruitComponent implements OnInit {
  fruits:string[]; // Array <string>
  constructor() {
    this.fruits = ["Orange", "Banane", "Mangue", "Ananas", "Citron", "Fraise"];
  }

  ngOnInit() {
  }

}
