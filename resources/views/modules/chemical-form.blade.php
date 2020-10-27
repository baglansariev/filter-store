<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заказать химический анализ воды</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/mail/chemical/send" id="chemicalForm">
                    <div class="form-group">
                        <label for="inputChemName">Ваше имя</label>
                        <input type="text" class="form-control" id="inputChemName" name="chem_name" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <label for="inputChemPhone">Ваш номер телефона</label>
                        <input type="text" class="form-control" id="inputChemPhone" name="chem_phone" placeholder="Телефон">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary chemical-send">Заказать</button>
            </div>
        </div>
    </div>
</div>