<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/mail/feedback/send" class="order-form">
                    <div class="form-group">
                        <label for="inputFeedbackClientName">Ваше имя</label>
                        <input type="text" class="form-control" id="inputFeedbackClientName" name="client_name" placeholder="Имя" required>
                    </div>
                    <div class="form-group">
                        <label for="inputFeedbackClientPhone">Ваш номер телефона</label>
                        <input type="text" class="form-control" id="inputFeedbackClientPhone" name="client_phone" placeholder="Телефон" required>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Заказать</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>