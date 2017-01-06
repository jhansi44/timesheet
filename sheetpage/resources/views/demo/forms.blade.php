
@extends('layouts.demo')
@section('title', 'Forms')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Basic Form Elements</div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
            <form role="form">
              <div class="form-group">
                <label>Text Input</label>
                <input class="form-control"/>
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="form-group">
                <label>Text Input with Placeholder</label>
                <input placeholder="Enter text" class="form-control"/>
              </div>
              <div class="form-group">
                <label>Static Control</label>
                <p class="form-control-static">email@example.com</p>
              </div>
              <div class="form-group">
                <label>File input</label>
                <input type="file"/>
              </div>
              <div class="form-group">
                <label>Text area</label>
                <textarea rows="3" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Checkboxes</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value=""/>Checkbox 1
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value=""/>Checkbox 2
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value=""/>Checkbox 3
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label>Inline Checkboxes</label>
                <label class="checkbox-inline">
                  <input type="checkbox"/>1
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox"/>2
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox"/>3
                </label>
              </div>
              <div class="form-group">
                <label>Radio Buttons</label>
                <div class="radio">
                  <label>
                    <input id="optionsRadios1" type="radio" name="optionsRadios" value="option1" checked=""/>Radio 1
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input id="optionsRadios2" type="radio" name="optionsRadios" value="option2"/>Radio 2
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input id="optionsRadios3" type="radio" name="optionsRadios" value="option3"/>Radio 3
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label>Inline Radio Buttons</label>
                <label class="radio-inline">
                  <input id="optionsRadiosInline1" type="radio" name="optionsRadiosInline" value="option1" checked=""/>1
                </label>
                <label class="radio-inline">
                  <input id="optionsRadiosInline2" type="radio" name="optionsRadiosInline" value="option2"/>2
                </label>
                <label class="radio-inline">
                  <input id="optionsRadiosInline3" type="radio" name="optionsRadiosInline" value="option3"/>3
                </label>
              </div>
              <div class="form-group">
                <label>Selects</label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label>Multiple Selects</label>
                <select multiple="" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <button type="submit" class="btn btn-default">Submit Button</button>
              <button type="reset" class="btn btn-default">Reset Button</button>
            </form>
          </div>
          <!-- /.col-lg-6 (nested)-->
          <div class="col-lg-6">
            <h1>Disabled Form States</h1>
            <form role="form">
              <fieldset disabled="">
                <div class="form-group">
                  <label for="disabledSelect">Disabled input</label>
                  <input id="disabledInput" type="text" placeholder="Disabled input" disabled="" class="form-control"/>
                </div>
                <div class="form-group">
                  <label for="disabledSelect">Disabled select menu</label>
                  <select id="disabledSelect" class="form-control">
                    <option>Disabled select</option>
                  </select>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"/>Disabled Checkbox
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Disabled Button</button>
              </fieldset>
            </form>
            <h1>Form Validation States</h1>
            <form role="form">
              <div class="form-group has-success">
                <label for="inputSuccess" class="control-label">Input with success</label>
                <input id="inputSuccess" type="text" class="form-control"/>
              </div>
              <div class="form-group has-warning">
                <label for="inputWarning" class="control-label">Input with warning</label>
                <input id="inputWarning" type="text" class="form-control"/>
              </div>
              <div class="form-group has-error">
                <label for="inputError" class="control-label">Input with error</label>
                <input id="inputError" type="text" class="form-control"/>
              </div>
            </form>
            <h1>Input Groups</h1>
            <form role="form">
              <div class="form-group input-group"><span class="input-group-addon">@</span>
                <input type="text" placeholder="Username" class="form-control"/>
              </div>
              <div class="form-group input-group">
                <input type="text" class="form-control"/><span class="input-group-addon">.00</span>
              </div>
              <div class="form-group input-group"><span class="input-group-addon"><i class="fa fa-eur"></i></span>
                <input type="text" placeholder="Font Awesome Icon" class="form-control"/>
              </div>
              <div class="form-group input-group"><span class="input-group-addon">$</span>
                <input type="text" class="form-control"/><span class="input-group-addon">.00</span>
              </div>
              <div class="form-group input-group">
                <input type="text" class="form-control"/><span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>@endsection