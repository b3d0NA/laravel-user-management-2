<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company

{
    protected static $formats = [
        '{{company_idPrefix}} {{lastName}}',
        '{{company_idPrefix}} {{lastName}} {{lastName}}',
        '{{company_idPrefix}} {{lastName}} {{company_idSuffix}}',
        '{{company_idPrefix}} {{lastName}} {{lastName}} {{company_idSuffix}}',
    ];

    /**
     * @see http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $company_idPrefix = ['PT', 'CV', 'UD', 'PD', 'Perum'];

    /**
     * @see https://www.amesbostonhotel.com/macam-macam-profesi-pekerjaan/
     * @see https://dukcapil.kedirikab.go.id/artikel/Jenis-Pekerjaan_ID10.html
     */
    protected static $jobTitleFormat = [
        'Akuntan', 'Apoteker', 'Arsitek', 'Atlet', 'Belum / Tidak Bekerja', 'Biarawati', 'Bidan', 'Buruh Harian Lepas',
        'Buruh Nelayan / Perikanan', 'Buruh Peternakan', 'Buruh Tani / Perkebunan', 'Desainer', 'Dokter', 'Dosen',
        'Guru', 'Hakim', 'Imam Masjid', 'Industri', 'Jaksa', 'Juru Masak', 'Karyawan BUMD', 'Karyawan BUMN',
        'Karyawan Honorer', 'Karyawan Swasta', 'Kepala Desa', 'Kepolisian RI (POLRI)', 'Kondektur', 'Konstruksi',
        'Konsultan', 'Masinis', 'Mekanik', 'Mengurus Rumah Tangga', 'Montir', 'Nahkoda', 'Nelayan / Perikanan',
        'Notaris', 'Paraji', 'Pastor', 'Pedagang', 'Pegawai Negeri Sipil (PNS)', 'Pelajar / Mahasiswa', 'Pelaut',
        'Pemandu Wisata', 'Pembantu Rumah Tangga', 'Penambang', 'Penata Busana', 'Penata Rambut', 'Penata Rias',
        'Pendeta', 'Peneliti', 'Penerjemah', 'Pengacara', 'Pensiunan', 'Penulis', 'Penyelam', 'Penyiar Radio',
        'Penyiar Televisi', 'Perancang Busana', 'Perangkat Desa', 'Perawat', 'Perdagangan', 'Petani / Pekebun',
        'Peternak', 'Pialang', 'Pilot', 'Pramugari', 'Pramusaji', 'Presiden', 'Programmer', 'Promotor Acara',
        'Psikiater / Psikolog', 'Satpam', 'Seniman', 'Sopir', 'Tabib', 'Tentara Nasional Indonesia (TNI)',
        'Transportasi', 'Tukang Batu', 'Tukang Cukur', 'Tukang Gigi', 'Tukang Jahit', 'Tukang Kayu',
        'Tukang Las / Pandai Besi', 'Tukang Listrik', 'Tukang Sol Sepatu', 'Ustaz / Mubaligh', 'Wakil Presiden',
        'Wartawan', 'Wiraswasta',
    ];

    /**
     * @see http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $company_idSuffix = ['(Persero) Tbk', 'Tbk'];

    /**
     * Get company_id prefix
     *
     * @return string company_id prefix
     */
    public static function company_idPrefix()
    {
        return static::randomElement(static::$company_idPrefix);
    }

    /**
     * Get company_id suffix
     *
     * @return string company_id suffix
     */
    public static function company_idSuffix()
    {
        return static::randomElement(static::$company_idSuffix);
    }
}
