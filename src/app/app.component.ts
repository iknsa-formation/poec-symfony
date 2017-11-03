import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class UserComponent implements OnInit {

    private user: User[];
  
}


contructor (private us:usersService){}

ngOninit(){
    this.user = this.us.getUsers();

}