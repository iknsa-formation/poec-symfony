import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { TemplateNewComponent } from './template-new/template-new.component';
import { SiderBarComponent } from './sider-bar/sider-bar.component';
import { ListeMenuComponent } from './liste-menu/liste-menu.component';
import { FooterPageComponent } from './footer-page/footer-page.component';
import { MenuHautComponent } from './menu-haut/menu-haut.component';

@NgModule({
  declarations: [
    AppComponent,
    TemplateNewComponent,
    SiderBarComponent,
    ListeMenuComponent,
    FooterPageComponent,
    MenuHautComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
