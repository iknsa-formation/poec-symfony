import { Component, OnInit } from '@angular/core';

@Component({
selector: 'app-mon-composant',
templateUrl: './mon-composant.component.html',
styleUrls: ['./mon-composant.component.css']
})

export class MonComposantComponent implements OnInit {
numbers:Object[]
constructor() { }


ngOnInit() {
this.numbers=[

{nom:'Amine',
moyenne:12,
admis:true,
},

{nom:'Ben',
moyenne:3,
admis:false,},

{nom:'Carl',
moyenne:15,
admis:true,}]
}

}
