import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-etudiant',
  templateUrl: './etudiant.component.html',
  styleUrls: ['./etudiant.component.css']
})
export class EtudiantComponent implements OnInit {
  students = [{name: "Bob", moyenne: 18}, {name: "Zak", moyenne: 12},
    {name: "Léon", moyenne: 17},
    {name: "Pierre", moyenne: 7},
    {name: "Jean", moyenne: 8},
    {name: "Luc", moyenne: 9}];
  constructor() { }

  ngOnInit() {
  }

}
