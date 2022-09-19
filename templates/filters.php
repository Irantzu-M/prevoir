<!-- Sección de filtros -->
<div class="sect-filters">
  <div class="container">
    <div class="form-fields">
      <div class="form-group">
        <label class="field-label">Rango de fechas</label>
        <div class="form-item datepicker">
          <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" class="datepicker-field" />
        </div>
      </div>
      <div class="form-group form-check">
        <label class="field-label">Apólices</label>
        <div class="form-item">
          <input type="checkbox" class="form-check-input" id="apolices">
          <label class="form-check-label" for="apolices">Apólices actualmente em vigor</label>
        </div>
      </div>
      <div class="form-group form-radio">
        <label class="field-label">Apólices</label>
        <div class="form-item">
          <input type="radio" class="form-radio-input" id="apolices-radio">
          <label class="form-radio-label" for="apolices-radio">Apólices actualmente em vigor</label>
        </div>
      </div>
      <div class="form-group">
        <label class="field-label">Elegir</label>
        <div class="form-item">
          <select class="select2-selector" name="selection" multiple="multiple">
            <option value="AL">Opt 1</option>
            <option value="WY">Opt 2</option>
            <option value="AL">Opt 3</option>
            <option value="WY">Opt 4</option>
            <option value="AL">Opt 5</option>
            <option value="WY">Opt 6</option>
            <option value="AL">Opt 7</option>
            <option value="WY">Opt 8</option>
            <option value="AL">Opt 9</option>
            <option value="WY">Opt 10</option>
            <option value="AL">Opt 11</option>
            <option value="WY">Opt 12</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="field-label">Elegir simple</label>
        <div class="form-item">
          <select class="select2-selector" name="selection">
            <option value="AL">Opt 1</option>
            <option value="WY">Opt 2</option>
            <option value="AL">Opt 3</option>
            <option value="WY">Opt 4</option>
          </select>
        </div>
      </div>
      <div class="form-actions">
        <div class="action-group">
          <button class="btn btn-primary">Filtrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Sección de filtros -->