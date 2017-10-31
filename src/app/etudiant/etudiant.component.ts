import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-etudiant',
  templateUrl: './etudiant.component.html',
  styleUrls: ['./etudiant.component.css']
})
export class EtudiantComponent implements OnInit {
    etudiants:Array<any>;
  constructor() { 
    this.etudiants= [
        {
        nom:'Pierre',
        moyen:15,
        admis:true
        },
        {
        nom:'Paul',
        moyen:8,
        admis:false
        },
        {
        nom:'Manon',
        moyen:5,
        admis:false
        }
    ];
  }

  ngOnInit() {
  }

}
