<div class="row g-3">
    <div class="col-md-3">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header bg-primary text-white fw-bold">รอบวันที่ 02/05/2565</div>
            <div class="card-body text-primary">
                <h5 class="card-title">รายละเอียด</h5>
                <div class="row g-2">
                    <div class="col-md-12">
                        <p class="card-text">เนื้อผ้า: ผ้าฮานาโกะ</p>
                    </div>
                    <div class="col-md-12">
                        <p class="card-text">จำนวน: 150 ชิ้น</p>
                    </div>
                    <div class="col-md-12 text-end">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stockDetailModal">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="stockDetailModal" tabindex="-1" aria-labelledby="stockDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="stockDetailModalLabel">รายละเอียดสินค้า</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="stockDetail">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>