import { Component, OnInit, Input } from '@angular/core';
import { PlayersService } from 'app/services/players.service';
import { Player } from 'app/model/player.model';

@Component({
  selector: 'app-mycomponent',
  templateUrl: './mycomponent.component.html',
  styleUrls: ['./mycomponent.component.css']
})
export class MycomponentComponent implements OnInit {
child = "Hello word";
myVar = true;
players;
goalPlus:boolean = true;
goalLess:boolean = true;
@Input() yes;

  constructor(public playerService :PlayersService) { 
    
  }

  ngOnInit() {
  this.players = this.playerService.getFootballers().then(data => this.players = data);
  }

  hidden(){
     return  this.myVar = !this.myVar
  }


}
