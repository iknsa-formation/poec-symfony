import { Component, OnInit } from '@angular/core';
import { PlayersService } from 'app/services/players.service';

@Component({
  selector: 'app-tennis',
  templateUrl: './tennis.component.html',
  styleUrls: ['./tennis.component.css']
})
export class TennisComponent implements OnInit {
  myVar = true;
  players;
  goalPlus:boolean = true;
  goalLess:boolean = true;  
  constructor(
    public playerService:PlayersService
  ) { }

  ngOnInit() {
    this.players = this.playerService.getTennismans().then(data => this.players = data);
  }
}
