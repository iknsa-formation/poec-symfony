import { Injectable } from '@angular/core';

@Injectable()
export class UsersService {

users: any;

getUsers(){
	this.users = [
		{
		firstName:"Moussa",
		lastName:"Camara",
		email:"Moussa@iknsa.fr"
		},
		{
		firstName:"Mouskito",
		lastName:"Camara",
		email:"Moussa@iknsa.fr"
		},
		{
		firstName:"khalid",
		lastName:"sookia",
		email:"Khalid@iknsa.fr"
		}
	]

	return this.users
}

  constructor() { }

}
