import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { TemplateNewComponent } from './template-new/template-new.component';
import { SiderBarComponent } from './sider-bar/sider-bar.component';
import { ListeMenuComponent } from './liste-menu/liste-menu.component';
import { FooterPageComponent } from './footer-page/footer-page.component';
import { MenuHautComponent } from './menu-haut/menu-haut.component';
import { AcueilComponentComponent } from './acueil-component/acueil-component.component';
import { AboutComponentComponent } from './about-component/about-component.component';
import { ContactComponentComponent } from './contact-component/contact-component.component';
import { AcueilSubmenuComponent } from './acueil-submenu/acueil-submenu.component';


const appRoutes: Routes = [
{
    path:'acueil',
    component: AcueilComponentComponent
},
{
    path:'about',
    component: AboutComponentComponent
},
{
    path:'contact',
    component: ContactComponentComponent
}
];

@NgModule({
  declarations: [
    AppComponent,
    TemplateNewComponent,
    SiderBarComponent,
    ListeMenuComponent,
    FooterPageComponent,
    MenuHautComponent,
    AcueilComponentComponent,
    AboutComponentComponent,
    ContactComponentComponent,
    AcueilSubmenuComponent
  ],
  imports: [
    RouterModule.forRoot(appRoutes),
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }


