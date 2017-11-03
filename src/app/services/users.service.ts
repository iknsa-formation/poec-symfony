import { Injectable } from '@angular/core';

@Injectable()
export class UsersService {
user: any;
    getUser(){
        	this.user = [
        {
            nom : 'Pierre',
            prenom: 'Henry',
            age: '8'
        },{
            nom : 'Paul',
           prenom: 'Henry',
            age: '18'
        },
        {
            nom : 'Jacques',
            prenom: 'Henry',
            age: '28'
        },
        {
            nom : 'Manon',
           prenom: 'Henry',
            age: '38'
        }
    ];
    }
  constructor() { }

}
