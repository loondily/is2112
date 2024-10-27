<?php
namespace Views;

use Views\BaseTemplate;

class FarmTemplate extends BaseTemplate {

    public function getFarmTemplate($rows): string 
    {
        $template = parent::getBaseTemplate();
        $str = '';
        $str .= <<<END
        <div class="row">
            <div class="col-md-8 offset-md-2">
        END;

        $str .= <<<END
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Количество</th>
            <th scope="col">Дата создания</th>
          </tr>
        </thead>
        <tbody>
        END;

        foreach($rows as $row)
            $str .= <<<LINE
                <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['created_at']}</td>
                </tr>
            LINE;

        $str .= <<<END
                </tbody>
            </table>        
            </div>
        </div>
        <script src="https://localhost/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        END;
        $resultTemplate =  sprintf($template, 'Список урожая', $str);
        return $resultTemplate;
    }

    public function getFormTemplate() 
    {
        $template = parent::getBaseTemplate();
        $str = '';
        $str .= <<<END
        <div class="row">
            <div class="col-md-4 offset-md-4">
            <form method="post" action="/add_user">
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Наименование:</label>
                    <input type="text" name="name" id="form2Example1" class="form-control" required/>
                    <div class="invalid-feedback">Поле обязательно к заполнению</div>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Количество:</label>
                    <input type="text" name="quantity" id="form2Example2" class="form-control" required/>
                    <div class="invalid-feedback">Поле обязательно к заполнению</div>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="dateTimeInput">Дата и время создания:</label>
                    <input type="datetime-local" class="form-control" id="dateTimeInput" name="date_time">
                    <div class="invalid-feedback">Поле обязательно к заполнению</div>
                </div>

                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Добавить</button>
            </form>
            </div>
        </div>
        <script src="https://localhost/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        END;
        $resultTemplate =  sprintf($template, 'Добавление', $str);
        return $resultTemplate;   
    }
}