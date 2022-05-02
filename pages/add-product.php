<form class="row g-2 needs-validation" novalidate>
    <div class="col-md-2">
        <label for="stockDate" class="form-label"><b>วันที่สต็อก</b></label>
        <input type="date" class="form-control" id="stockDate" value="" required>
        <div class="invalid-feedback">
            เลือกวันที่สต็อก
        </div>
    </div>
    <div class="col-md-2">
        <label for="pantsTexture" class="form-label"><b>รายละเอียดเนื้อผ้า</b></label>
        <select class="form-select" id="pantsTexture">
            <option selected disabled>เลือก...</option>
            <option value="ผ้าฮานาโกะ">ผ้าฮานาโกะ</option>
            <option value="ผ้านาโน">ผ้านาโน</option>
        </select>
        <div class="invalid-feedback">
            เลือกรายละเอียดเนื้อผ้า
        </div>
    </div>
    <div class="col-md-2">
        <label for="size" class="form-label"><b>ประเภท</b></label>
        <select class="form-select" id="pantsType" onchange="handlePantsType(this)">
            <option selected disabled>เลือก...</option>
            <option value="ก003">ขาสั้น</option>
            <option value="ก004">ขายาว</option>
        </select>
        <div class="invalid-feedback">
            เลือกประเภท
        </div>
    </div>
    <div class="col-md-2" id="showPants" style="display: none;">
        <label for="size" class="form-label"><b>ทรงกางเกง</b></label>
        <select class="form-select" id="pantsType">
            <option selected disabled>เลือก...</option>
            <option value="ก001">กระบอกใหญ่</option>
            <option value="ก002">กระบอกเล็ก</option>
        </select>
        <div class="invalid-feedback">
            เลือกทรงกางเกง
        </div>
    </div>
    <div class="col-md-2">
        <label for="size" class="form-label"><b>สี</b></label>
        <select class="form-select" id="pantsColor">
            <option selected disabled>เลือก...</option>
            <option value="ดำ">ดำ</option>
            <option value="น้ำตาล">น้ำตาล</option>
            <option value="ครีม">ครีม</option>
            <option value="กรม">กรม</option>
            <option value="ขาว">ขาว</option>
            <option value="เขียวทหาร">เขียวทหาร</option>
            <option value="โอวัลติล">โอวัลติล</option>
            <option value="ฟ้าอ่อน">ฟ้าอ่อน</option>
            <option value="ดำลายเส้น">ดำลายเส้น</option>
            <option value="มะเหมี่ยว">มะเหมี่ยว</option>
            <option value="เหลืองมัสตาร์ด">เหลืองมัสตาร์ด</option>
            <option value="เทาดิน">เทาดิน</option>
            <option value="ม่วงพลาเทล">ม่วงพลาเทล</option>
            <option value="ชมพูกะปิ">ชมพูกะปิ</option>
            <option value="เขียวมิ้น">เขียวมิ้น</option>
            <option value="เทาอ่อน">เทาอ่อน</option>
            <option value="ส้มอิฐ">ส้มอิฐ</option>
            <option value="ม่วงเม็ดมะปราง">ม่วงเม็ดมะปราง</option>
            <option value="ตารางโอรส">ตารางโอรส</option>
            <option value="เทาเข้มลายจุด">เทาเข้มลายจุด</option>
            <option value="ริ้วขาว">ริ้วขาว</option>
        </select>
        <div class="invalid-feedback">
            เลือกสี
        </div>
    </div>
    <div class="col-md-12">
        <label for="size" class="form-label"><b>รายละเอียดไซส์ <i class="fa-solid fa-arrows-up-down-left-right"></i></b></label>
        <div class="row g-2">
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="sizeS" value="S" readonly>
                    <input type="text" class="form-control" id="sizeCountS" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="sizeM" value="M" readonly>
                    <input type="text" class="form-control" id="sizeCountM" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="sizeL" value="L" readonly>
                    <input type="text" class="form-control" id="sizeCountL" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="sizeXL" value="XL" readonly>
                    <input type="text" class="form-control" id="sizeCountXL" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="size2XL" value="2XL" readonly>
                    <input type="text" class="form-control" id="sizeCount2XL" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="size3XL" value="3XL" readonly>
                    <input type="text" class="form-control" id="sizeCount3XL" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="size4XL" value="4XL" readonly>
                    <input type="text" class="form-control" id="sizeCount4XL" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="size5XL" value="5XL" readonly>
                    <input type="text" class="form-control" id="sizeCount5XL" placeholder="จำนวน" value="0" required>
                    <div class="invalid-feedback">
                        จำนวน
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 text-end">
        <button class="btn btn-primary" type="submit"><i class="fa-solid fa-plus"></i> เพิ่มสินค้า</button>
    </div>
</form>

<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        handleAddProduct();
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    handleAddProduct = () => {
        console.log('handleAddProduct');
    }

    handlePantsType = (e) => {
        if (e.value == 'ก004') {
            document.getElementById('showPants').style.display = 'block';
        } else {
            document.getElementById('showPants').style.display = 'none';
        }
    }
</script>