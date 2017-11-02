import { Injectable } from '@angular/core';
import {Player} from '../model/player.model';
import { PlayerOfBasket, PlayerOfTennis } from '../mock/mock-players'

@Injectable()
export class PlayersService {

  constructor() { }

  getPlayers(): Promise<Array<Player>> {
    return Promise.resolve(PlayerOfBasket)
  }

  getTennisman(): Promise<Array<Player>> {
    return Promise.resolve(PlayerOfTennis)
  }

}
