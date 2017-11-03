import { Injectable } from '@angular/core';
import { User } from '../contact/users'

@Injectable()
export class UsersService {
    listeUsers:any;

  constructor() { }
    getUsers():Array<User>{
        this.listeUsers = [
            {
                "name":"Abdillah"
            },
            {
                "name":"Jhony"
            },
            {
                "name":"Abdillah"
            }
            
        ]
        
        return this.listeUsers;
    }

}
