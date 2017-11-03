import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BelleComponent } from './belle.component';

describe('BelleComponent', () => {
  let component: BelleComponent;
  let fixture: ComponentFixture<BelleComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BelleComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BelleComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
