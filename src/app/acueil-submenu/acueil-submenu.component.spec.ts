import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AcueilSubmenuComponent } from './acueil-submenu.component';

describe('AcueilSubmenuComponent', () => {
  let component: AcueilSubmenuComponent;
  let fixture: ComponentFixture<AcueilSubmenuComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AcueilSubmenuComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AcueilSubmenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
