import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AcueilComponentComponent } from './acueil-component.component';

describe('AcueilComponentComponent', () => {
  let component: AcueilComponentComponent;
  let fixture: ComponentFixture<AcueilComponentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AcueilComponentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AcueilComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
