import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-lesnom',
  templateUrl: './lesnom.component.html',
  styleUrls: ['./lesnom.component.css']
})
export class LesnomComponent implements OnInit {
    lesSuperNoms:string[];
    indice = 0;
  constructor() {
    this.lesSuperNoms =['Bob','Marley','Tuppac','Amaru','Shakur'];
  }
    afficheIndice():number{
        return this.indice++;
    }

  ngOnInit() {
  }

}
