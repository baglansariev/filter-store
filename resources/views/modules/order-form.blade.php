<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заказать фильтр</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="order-form">
                    <div class="form-group">
                        <label for="inputClientName">Ваше имя</label>
                        <input type="text" class="form-control" id="inputClientName" name="client_name" placeholder="Имя" required>
                    </div>
                    <div class="form-group">
                        <label for="inputClientPhone">Ваш номер телефона</label>
                        <input type="text" class="form-control" id="inputClientPhone" name="client_phone" placeholder="Телефон" required>
                    </div>
                    <div class="form-group">
                        <label for="inputProductName">Название товара</label>
                        <input type="text" class="form-control product-name" id="inputProductName" name="product_name" placeholder="Название товара" required>
                    </div>
                    <div class="form-group">
                        <label for="inputProductPrice">Цена</label>
                        <input type="number" class="form-control product-price" id="inputProductPrice" name="product_price" placeholder="Цена" required>
                    </div>
                    <div class="form-group">
                        <label for="inputProductQuantity">Количество</label>
                        <input type="number" class="form-control product-quantity" id="inputProductQuantity" name="product_quantity" placeholder="Количество" required>
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