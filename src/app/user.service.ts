import { Injectable } from '@angular/core';
import { user } from '../user.model';

@Injectable()
export class UserService {

user: any;
getUser(){
  this.user = [
    {
        firstName:"Veronica",
        lastName:"Ochoa",
        email:"veronikot11@yahoo.fr
    },
  
    {
        firstName:"Moussa",
        lastName:"Camara",
        email:"moussa@iknsa.fr
    },
    
    {
        firstName:"Khalid",
        lastName:"Sockita",
        email:"khali@iknsa.fr
    },
        
    {
        firstName:"Beronik",
        lastName:"Ochoa",
        email:"beronik@hotmail.com
    }
    
    
 
  ];   
  
  return this.users;
   
}

  constructor() { }

}
