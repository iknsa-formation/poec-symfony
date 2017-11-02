import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-be-fruit',
  templateUrl: './fruit.component.html',
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
