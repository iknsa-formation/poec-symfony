import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LesnomComponent } from './lesnom.component';

describe('LesnomComponent', () => {
  let component: LesnomComponent;
  let fixture: ComponentFixture<LesnomComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LesnomComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LesnomComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
