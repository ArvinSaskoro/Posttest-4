<main id="dark">
        <h2 class="isi">Form Pembelian</h2>
        <hr align="center" width="95%" size="4" color="#333">
        <div class="datadiri">
            <form action="hasil/tampil.php" method="POST">
                <label for="fullname"> Full Name </label>
                    <input
                        required
                        placeholder="Input Name"
                        id="nama"
                        name="nama"
                        type="text"
                        autocomplete='off'
                    />
                <br>
        
                <label for="gitar"> Nama Gitar </label>
                <select name="namagitar">
                    <option value="pilih">-Pilih Gitar-</option>
                    <option value="Alhambra">Alhambra</option>
                    <option value="Chitarra">Chitarra</option>
                    <option value="Dreadnought">Dreadnought</option>
                    <option value="Giannini">Giannini</option>
                </select>
                <br>
        
                <label for="jumlah"> Jumlah Beli</label>
                    <input
                        placeholder="Jumlah"
                        id="jumlah"
                        name="jumlah"
                        type="number"
                        min="1"
                    />
                <br>
        
                <label for="alamat"> Alamat Rumah </label>
                    <input
                        required
                        placeholder="Alamat"
                        id="alamat"
                        name="alamat"
                        type="text"
                        autocomplete='off'
                    />
                <br>
        
                <label for="email"> Email </label>
                <input
                    required
                    placeholder="Email"
                    id="email"
                    name="email"
                    type="email"
                    autocomplete='off'
                />
                <br>
        
                <label for="wa"> No WhatsApp </label>
                <input
                    required
                    placeholder="WhatsApp"
                    id="wa"
                    name="wa"
                    type="text"
                    autocomplete='off'
                />
                <br>
                <input type="submit" name="submit" value="PESAN">
            </form>
        </div>
            
    </main>
