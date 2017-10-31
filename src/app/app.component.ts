import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  
  etudiants: Array<any> // Array<string>
  constructor() {
  	this.etudiants = [
  		{
  		nom: 'Pierre',
  		moyenne: '15',
  		admis: true
  		} , {

  		nom: 'Paul',
  		moyenne: '10',
  		admis: true

  		} ,	{

  		nom: 'Jacques',
  		moyenne: '8',
  		admis: false

  		} ,	{

  		nom: 'Manon',
  		moyenne: '5',
  		admis: false
  		} 

  	];
  }
}