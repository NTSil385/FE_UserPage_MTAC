// Định nghĩa các loại chất thải
export const WASTE_TYPES = {
  normal: {
    name: "Chất thải thông thường",
    field: "normal_waste",
  },
  light_bulb: {
    name: "Bóng đèn",
    field: "light_bulb_weight",
  },
  ma13: {
    name: "Mã 13",
    field: "ma13_weight",
  },
  ma14: {
    name: "Mã 14",
    field: "ma14_weight",
  },
};
export const measurementPrices = {
  // Giá đo đạc mẫu nước
  water: {
    van_toc: { price: 600000, name: "Vận tốc" },
    luu_luong: { price: 650000, name: "Lưu lượng" },
    nhiet_do: { price: 60000, name: "Nhiệt độ" },
    ph: { price: 50000, name: "pH" },
    ts: { price: 100000, name: "TS" },
    tss: { price: 120000, name: "TSS" },
    tds: { price: 120000, name: "TDS" },
    do_duc: { price: 100000, name: "Độ đục" },
    do_cung: { price: 120000, name: "Độ cứng (CaCO3)" },
    do_kiem: { price: 120000, name: "Độ kiềm" },
    do_axit: { price: 120000, name: "Độ axit" },
    do_mau: { price: 100000, name: "Độ màu" },
    mui: { price: 100000, name: "Mùi" },
    do: { price: 100000, name: "Hàm lượng oxy hòa tan (DO)" },
    bod5: { price: 120000, name: "Nhu cầu oxy sinh học 5 ngày (BOD5)" },
    cod: { price: 120000, name: "Nhu cầu oxy hóa học (COD)" },
    clorua: { price: 120000, name: "Hàm lượng clorua (Cl-)" },
    clo_du: { price: 120000, name: "Hàm lượng clo dư (Cl2)" },
    phospho: { price: 120000, name: "Hàm lượng phospho tổng (P)" },
    phosphat: { price: 120000, name: "Hàm lượng phosphat (PO43-)" },
    sulfua: { price: 120000, name: "Hàm lượng sulfua (S2-)" },
    flo: { price: 120000, name: "Hàm lượng Flo (F)" },
    nitrit: { price: 120000, name: "Hàm lượng Nitrit (NO2-)" },
    nitrat: { price: 120000, name: "Hàm lượng Nitrat (NO3-)" },
    amonia: { price: 120000, name: "Hàm lượng Amonia (NH4+)" },
    nito: { price: 120000, name: "Hàm lượng Nito tổng (N)" },
    sulfat: { price: 160000, name: "Hàm lượng sulfat" },
    dau_tong: { price: 330000, name: "Hàm lượng dầu tổng" },
    dau_mo_dtv: { price: 330000, name: "Hàm lượng dầu mỡ động thực vật" },
    dau_khoang: { price: 330000, name: "Hàm lượng dầu khoáng" },
    chat_hoat_dong_be_mat: { price: 320000, name: "Tổng chất hoạt động bề mặt" },
    bac: { price: 140000, name: "Hàm lượng bạc (Ag)" },
    bari: { price: 160000, name: "Hàm lượng Bari (Ba)" },
    canxi: { price: 160000, name: "Hàm lượng Canxi (Ca)" },
    asen: { price: 160000, name: "Hàm lượng Asen (As)" },
    thuy_ngan: { price: 160000, name: "Hàm lượng thủy ngân (Hg)" },
    cadimi: { price: 160000, name: "Hàm lượng Cadimi (Cd)" },
    cobalt: { price: 160000, name: "Hàm lượng Cobalt (Co)" },
    crom_tong: { price: 160000, name: "Hàm lượng crom tổng (Cr)" },
    cr6: { price: 160000, name: "Hàm lượng Cr6+" },
    cr3: { price: 160000, name: "Hàm lượng Cr3+" },
    dong: { price: 160000, name: "Hàm lượng đồng (Cu)" },
    xyanua: { price: 200000, name: "Hàm lượng Xyanua (CN-)" },
    phenol: { price: 600000, name: "Hàm lượng phenol tổng" },
    sat: { price: 160000, name: "Hàm lượng sắt (Fe)" },
    kali: { price: 160000, name: "Hàm lượng kali (K)" },
    mangan: { price: 160000, name: "Hàm lượng Mangan (Mn)" },
    natri: { price: 160000, name: "Hàm lượng Natri (Na)" },
    chi: { price: 160000, name: "Hàm lượng chì (Pb)" },
    selen: { price: 160000, name: "Hàm lượng Selen (Se)" },
    niken: { price: 160000, name: "Hàm lượng Niken (Ni)" },
    thiec: { price: 160000, name: "Hàm lượng thiếc (Sn)" },
    kem: { price: 160000, name: "Hàm lượng kẽm (Zn)" },
    magie: { price: 160000, name: "Hàm lượng Magiê (Mg)" },
    silic: { price: 160000, name: "Hàm lượng Silic (Si)" },
    tsvkhk: { price: 160000, name: "Tổng số vi khuẩn hiếu khí" },
    coliforms: { price: 120000, name: "Coliforms" },
    coliforms_nuoc_thai: { price: 190000, name: "Coliforms (pn.bọ)(nước thải)" },
    fecal_coliforms: { price: 190000, name: "Fecal coliforms" },
    ecoli: { price: 160000, name: "E.coli" },
    shigella: { price: 160000, name: "Shigella" },
    salmonella: { price: 160000, name: "Salmonella" },
    do_dan_dien: { price: 160000, name: "Độ dẫn điện/ EC" },
    do_man: { price: 160000, name: "Độ mặn/ Độ muối" },
    carbonate: { price: 160000, name: "Hàm lượng carbonate (CO32-)" },
    bicarbonate: { price: 160000, name: "Hàm lượng Bicarbonate (HCO3-)" },
    magie_mg: { price: 160000, name: "Hàm lượng Magie (Mg)" },
    cod_kmno4: { price: 160000, name: "COD (KMnO4)" },
    nhom: { price: 160000, name: "Hàm lượng Nhôm (Al)" },
    sat_2: { price: 160000, name: "Hàm lượng Sắt II (Fe2+)" },
    vibrio_cholerae: { price: 160000, name: "Vibrio cholerae" },
    antimon: { price: 160000, name: "Hàm lượng Antimon (Sb)" },
    tali: { price: 160000, name: "Hàm lượng Tali (Tl)" },
    vanadium: { price: 160000, name: "Hàm lượng Vanadium (V)" },
    beryl: { price: 160000, name: "Hàm lượng Beryl (Be)" },
    molybden: { price: 160000, name: "Hàm lượng Molybden (Mo)" },
    anion_hdbe_mat: { price: 160000, name: "Anion hoạt động bề mặt" },
    paraquat: { price: 1200000, name: "Hóa chất trừ cỏ 2,4 D; 2,4,5 T; paraquat" },
    asen_2: { price: 150000, name: "Asen" },
    dong_vat_noi: { price: 600000, name: "Động vật nổi" },
    thuc_vat_noi: { price: 600000, name: "Thực vật nổi" },
    dong_vat_day: { price: 600000, name: "Động vật đáy" },
    toc: { price: 600000, name: "TOC" },
    pcb: { price: 800000, name: "Các hợp chất polyclobiphenyl (PCB)" },
    phong_xa_alpha: { price: 800000, name: "Tổng hoạt độ phóng xạ α" },
    phong_xa_beta: { price: 800000, name: "Tổng hoạt độ phóng xạ β" },
    ddts: { price: 900000, name: "Tổng Dichloro diphenyl trichloroethane (DDTs)" },
    hoa_chat_bvtv_photpho: { price: 700000, name: "Hóa chất bảo vệ thực vật photpho hữu cơ" },
    hoa_chat_bvtv_clo: { price: 700000, name: "Hóa chất bảo vệ thực vật clo hữu cơ" },
    heptachlor: { price: 800000, name: "Heptachlor & Hetachlorepoxide" },
    dieldrin: { price: 700000, name: "Dieldrin" },
    bhc: { price: 800000, name: "Benzen hexachloride (BHC)" },
    aldrin: { price: 800000, name: "Aldrin" },
    permanganat: { price: 300000, name: "Chỉ số pecmanganat" },
    do_trong_suot: { price: 350000, name: "Độ trong suốt" },
  },
  
  // Giá đo đạc mẫu khí xung quanh/khu vực làm việc
  air: {
    bam_toa_do: { price: 0, name: "Bấm tọa độ" },
    nhiet_do: { price: 50000, name: "Nhiệt độ" },
    do_am: { price: 50000, name: "Độ ẩm" },
    tieng_on: { price: 80000, name: "Tiếng ồn" },
    anh_sang: { price: 60000, name: "Ánh sáng" },
    toc_do_gio: { price: 60000, name: "Tốc độ gió" },
    ham_luong_bui: { price: 120000, name: "Hàm lượng bụi" },
    co: { price: 100000, name: "CO" },
    co2: { price: 100000, name: "CO2" },
    so2: { price: 100000, name: "SO2" },
    no2: { price: 100000, name: "NO2" },
    o3: { price: 140000, name: "O3" },
    nox: { price: 100000, name: "NOx" },
    hf: { price: 130000, name: "HF" },
    hcl: { price: 140000, name: "HCl" },
    h2so4_h3po4: { price: 220000, name: "H2SO4 / H3PO4" },
    h2s: { price: 130000, name: "H2S" },
    nh3: { price: 140000, name: "NH3" },
    voc: { price: 400000, name: "VOC" },
    thc: { price: 400000, name: "THC" },
    toluen: { price: 190000, name: "Toluen" },
    al: { price: 160000, name: "Al" },
    zn: { price: 160000, name: "Zn" },
    cu: { price: 160000, name: "Cu" },
    hc: { price: 220000, name: "HC" },
    xylen: { price: 190000, name: "Xylen" },
    benzen: { price: 190000, name: "Benzen" },
    styren: { price: 190000, name: "Styren" },
    tricloethylen: { price: 220000, name: "Tricloethylen" },
    phenol: { price: 220000, name: "Phenol" },
    ch3sh: { price: 220000, name: "CH3SH" },
    do_rung: { price: 220000, name: "Độ rung" },
    bui_chi: { price: 220000, name: "Bụi Chì (Pb)" },
    on_dai_tan: { price: 220000, name: "ồn đài tần" },
    buc_xa_ion_hoa: { price: 220000, name: "Bức xạ ion hóa" },
    dien_truong: { price: 220000, name: "Điện trường" },
    tu_truong: { price: 220000, name: "Từ trường" },
    metyl_mercaptan: { price: 270000, name: "Metyl Mercaptan (MEK)" },
    ethanol: { price: 270000, name: "Ethanol" },
    methanol: { price: 270000, name: "Methanol" },
    ap_suat: { price: 60000, name: "Áp suất" },
    huong_gio: { price: 60000, name: "Hướng gió" },
    tong_bui_lo_lung: { price: 250000, name: "Tổng bụi lơ lửng" },
    pm10: { price: 250000, name: "PM10" },
    pm25: { price: 350000, name: "PM2.5" },
    anilin: { price: 250000, name: "Anilin" },
    chloroform: { price: 250000, name: "Chloroform" },
    formaldehyt: { price: 200000, name: "Formaldehyt" },
    tetraclotylen: { price: 250000, name: "Tetraclotylen" },
    vinyl_clorua: { price: 300000, name: "Vinyl clorua" },
    pentan_hexan: { price: 400000, name: "Pentan/ Hexan/ Heptan/Octan/ Nonan/ Decan/ Undecan/Naphalen/Cyclohexan" },
    fluoranthene: { price: 400000, name: "Fluoranthene/Acenaphthylene" },
    dem_hat_bui_duoi_5: { price: 120000, name: "Đếm hạt bụi (Đếm ra số lượng hạt) Bụi hạt < 5µm" },
    dem_hat_bui_tren_5: { price: 120000, name: "Đếm hạt bụi (Đếm ra số lượng hạt) Bụi hạt > 5µm" }
  },

  // Giá đo đạc khí thải tại nguồn
  emission: {
    ham_luong_bui: { price: 1200000, name: "Hàm lượng bụi" },
    nhiet_do: { price: 330000, name: "Nhiệt độ" },
    luu_luong: { price: 1200000, name: "Lưu lượng" },
    co: { price: 350000, name: "CO" },
    co2: { price: 350000, name: "CO2" },
    o2: { price: 350000, name: "O2" },
    so2: { price: 350000, name: "SO2" },
    no2: { price: 350000, name: "NO2" },
    nox: { price: 350000, name: "NOx" },
    hcn: { price: 430000, name: "HCN" },
    hf: { price: 430000, name: "HF" },
    hcl: { price: 430000, name: "HCl" },
    h2so4: { price: 430000, name: "H2SO4" },
    h2s: { price: 430000, name: "H2S" },
    nh3: { price: 430000, name: "NH3" },
    voc: { price: 430000, name: "VOC" },
    thc: { price: 430000, name: "THC" },
    toluen: { price: 430000, name: "Toluen" },
    butyl_acetat: { price: 430000, name: "Butyl acetat" },
    xylen: { price: 430000, name: "Xylen" },
    benzen: { price: 430000, name: "Benzen" },
    styren: { price: 430000, name: "Styren" },
    phenol: { price: 430000, name: "Phenol" },
    formaldehyl: { price: 430000, name: "Formaldehyl" },
    ethyl_acetat: { price: 430000, name: "ethyl acetat" },
    n_hexan: { price: 430000, name: "n-Hexan" },
    zn: { price: 330000, name: "Zn" },
    antimon: { price: 430000, name: "Antimon (Sb)" },
    as: { price: 330000, name: "As" },
    ba: { price: 330000, name: "Ba" },
    be: { price: 330000, name: "Be" },
    cr: { price: 330000, name: "Cr" },
    co: { price: 330000, name: "Co" },
    cu: { price: 330000, name: "Cu" },
    pb: { price: 330000, name: "Pb" },
    cd: { price: 330000, name: "Cd" },
    mn: { price: 330000, name: "Mn" },
    hg: { price: 330000, name: "Hg" },
    ni: { price: 330000, name: "Ni" },
    se: { price: 330000, name: "Se" },
    ag: { price: 330000, name: "Ag" },
    tali: { price: 330000, name: "Tali (Tl)" },
    mercaptan: { price: 400000, name: "Mercaptan" },
    ethanol: { price: 430000, name: "Ethanol" },
    methanol: { price: 330000, name: "Methanol" },
    mek: { price: 400000, name: "MEK" },
    aceton: { price: 400000, name: "Aceton" },
    n_buty: { price: 400000, name: "n-buty" },
    acetat: { price: 400000, name: "Acetat" },
    etylamin: { price: 550000, name: "Etylamin" },
    anilin: { price: 550000, name: "Anilin" },
    propylanoxy: { price: 550000, name: "Propylanoxy" },
    tieng_on: { price: 180000, name: "Tiếng ồn" },
    dioxin_furan: { price: 49000000, name: "Dioxin/Furan (PCDD/PCDF)" },
    isopropanol: { price: 500000, name: "Isopropanol" }
  },

  // Giá đo đạc mẫu đất/trầm tích/bùn/chất thải
  soil: {
    ph: { price: 190000, name: "pH" },
    do_am: { price: 270000, name: "Độ ẩm" },
    do_dan_dien: { price: 270000, name: "Độ dẫn điện" },
    do_chua: { price: 270000, name: "Độ chua" },
    clorua: { price: 270000, name: "Hàm lượng Clorua (Cl-)" },
    carbon_huu_co: { price: 270000, name: "Tổng Carbon hữu cơ" },
    nito: { price: 270000, name: "Hàm lượng Nitơ tổng (N)" },
    phospho: { price: 270000, name: "Hàm lượng phospho tổng (P)" },
    natri: { price: 270000, name: "Hàm lượng Natri (Na)" },
    kali: { price: 270000, name: "Hàm lượng Kali (K)" },
    sat: { price: 270000, name: "Hàm lượng Sắt (Fe)" },
    nhom: { price: 270000, name: "Hàm lượng Nhôm (Al)" },
    canxi: { price: 270000, name: "Hàm lượng Canxi (Ca)" },
    magie: { price: 270000, name: "Hàm lượng Magie (Mg)" },
    chi: { price: 270000, name: "Hàm lượng Chì (Pb)" },
    cadimi: { price: 270000, name: "Hàm lượng Cadimi (Cd)" },
    niken: { price: 270000, name: "Hàm lượng Niken (Ni)" },
    dong: { price: 270000, name: "Hàm lượng đồng (Cu)" },
    kem: { price: 270000, name: "Hàm lượng kẽm (Zn)" },
    crom: { price: 270000, name: "Hàm lượng Crom (Cr)" },
    thuy_ngan: { price: 270000, name: "Hàm lượng thủy ngân (Hg)" },
    asen: { price: 270000, name: "Hàm lượng Asen (As)" },
    molypden: { price: 270000, name: "Hàm lượng Mo" },
    coban: { price: 270000, name: "Hàm lượng Co" },
    selen: { price: 270000, name: "Hàm lượng Se" },
    bari: { price: 270000, name: "Hàm lượng Bari" },
    antimon: { price: 270000, name: "Hàm lượng Antimon (Sb)" },
    mangan: { price: 270000, name: "Hàm lượng Mangan (Mn)" },
    bac: { price: 270000, name: "Hàm lượng Ag" },
    pesticides_nhom_1: { price: 800000, name: "Andrin/ Beryn (Be)/ Vanadi (V)/ Tali (Tl)/Benzen hexachloride (BHC)/ Lindan/Dieldrin/Endrin/Endrin aldehyd/Clodan/Metyl parathion/Parathion" },
    ddt: { price: 800000, name: "o,p-DDT/ p,p-DDT" },
    phenoxyacetic: { price: 1000000, name: "2,4-Diclophenoxyacetic axit (2,4-D)/ Endosulfan I/ Endosulfan II/ Endosulfan sunfat" },
    heptaclo: { price: 600000, name: "Heptaclo/ Kepon/ Heptaclo epoxit/Metoxyclo/Mirex" },
    pcb: { price: 800000, name: "Pentaclobenzen/Hexaphen/Disulfoton/ Phorat/ Tổng polyclobiphenyl" },
    xyanua: { price: 300000, name: "Tổng xyanua (CN-)" },
    tong_dau: { price: 900000, name: "Tổng dầu" },
    clorua_huu_co: { price: 700000, name: "Carbon tetraclorua/clobenzen/Cloroform/ Methylen clorua/ o-Diclobenzen/ Vinyl clorua" },
    chat_huu_co: { price: 800000, name: "Benzen/ Etyl benzene/ Triclotylen/ Tetraclotylen/Toluen/ Xylen và các chất của xylen" },
    naphtalen: { price: 700000, name: "Naptalen/Axeton/Metanol/ n-Butanol/ Axetonitril" },
    metyl_etyl: { price: 700000, name: "Metyl etyl keton" },
    thuoc_bvtv: { price: 800000, name: "Dư lượng thuốc bảo vệ thực vật gốc clo/ Dư lượng thuốc bảo vệ thực vật gốc photpho" }
  },

  // Giá đo đạc mẫu môi trường lao động
  labor_environment: {
    do_am: { price: 40000, name: "Độ ẩm" },
    nhiet_do: { price: 40000, name: "Nhiệt độ" },
    tieng_on: { price: 40000, name: "Tiếng ồn" },
    tieng_on_dai_tan: { price: 120000, name: "Tiếng ồn đài tần" },
    toc_do_gio: { price: 40000, name: "Tốc độ gió" },
    asen: { price: 200000, name: "Asen" },
    cadimi: { price: 200000, name: "Cd và hợp chất của Cd" },
    mangan: { price: 220000, name: "Mn, MnO" },
    hcl: { price: 200000, name: "HCl" },
    h2so4: { price: 200000, name: "H2SO4" },
    hf: { price: 200000, name: "HF" },
    h2s: { price: 200000, name: "H2S" },
    nh3: { price: 200000, name: "NH3" },
    benzen: { price: 200000, name: "Benzen" },
    toluen: { price: 200000, name: "Toluen" },
    xylen: { price: 200000, name: "Xylen" },
    cloroform: { price: 400000, name: "Cloroform" },
    co: { price: 100000, name: "CO" },
    formaldehyt: { price: 200000, name: "Formaldehyt" },
    thc: { price: 200000, name: "THC" },
    no2: { price: 100000, name: "NO2" },
    o3: { price: 200000, name: "O3" },
    phenol: { price: 200000, name: "Phenol" },
    so2: { price: 100000, name: "SO2" },
    styren: { price: 200000, name: "Styren" },
    ham_luong_bui: { price: 120000, name: "Hàm lượng bụi" },
    bui_ho_hap: { price: 160000, name: "Bụi hô hấp" },
    voc: { price: 220000, name: "VOC" },
    anh_sang: { price: 30000, name: "Ánh sáng" },
    tricloethylen: { price: 290000, name: "Tricloethylen" },
    do_rung: { price: 120000, name: "Độ rung/ Rung chuyển theo đài tầng" },
    bui_chi: { price: 250000, name: "Bụi Chì (Pb)/ Bụi amiăng" },
    ch4: { price: 290000, name: "CH4" },
    xang: { price: 200000, name: "Xăng" }
  }
};

//Cấu trúc giá vận chuyển và nhân công theo khu vực
export const transportationPrices = {
  regions: {
    hcm_inner: {
      name: "TPHCM (Các quận nội thành)",
      transport: 600000,
      labor: 300000,
    },
    hcm_outer: {
      name: "TPHCM - các huyện",
      transport: 800000,
      labor: 300000,
    },
    hcm_cg: {
      name: "TPHCM - Cần giờ",
      transport: 1000000,
      labor: 300000,
    },
    longan_mkkt: {
      name: "Long An - Mộc Hóa, Kiến Tường",
      transport: 1500000,
      labor: 300000,
    },
    longan_other: {
      name: "Long An - còn lại",
      transport: 1200000,
      labor: 300000,
    },
    dongnai_bh: {
      name: "Đồng Nai - Biên Hòa",
      transport: 600000,
      labor: 300000,
    },
    dongnai_tbltn: {
      name: "Đồng Nai - Trảng Bom, Long Thành, Nhơn Trạch",
      transport: 1200000,
      labor: 300000,
    },
    dongnai_other: {
      name: "Đồng Nai - Còn lại",
      transport: 1800000,
      labor: 300000,
    },
    binhduong_main: {
      name: "Bình Dương - Thuận An, Dĩ An, Thủ Dầu Một",
      transport: 1200000,
      labor: 300000,
    },
    binhduong_other: {
      name: "Bình Dương - còn lại",
      transport: 1900000,
      labor: 300000,
    },
    tayninh: {
      name: "Tây Ninh",
      transport: 1200000,
      labor: 400000,
    },
    tiengiang: {
      name: "Tiền Giang",
      transport: 1400000,
      labor: 300000,
    },
    bentre: {
      name: "Bến Tre",
      transport: 1500000,
      labor: 300000,
    },
    vinhlong: {
      name: "Vĩnh Long",
      transport: 2000000,
      labor: 400000,
    },
    travinh: {
      name: "Trà Vinh",
      transport: 2000000,
      labor: 400000,
    },
    cantho: {
      name: "Cần Thơ",
      transport: 2000000,
      labor: 400000,
    },
    angiang: {
      name: "An Giang",
      transport: 2000000,
      labor: 400000,
    },
    kiengiang: {
      name: "Kiên Giang",
      transport: 2000000,
      labor: 400000,
    },
    haugiang: {
      name: "Hậu Giang",
      transport: 2000000,
      labor: 400000,
    },
    soctrang: {
      name: "Sóc Trăng",
      transport: 2000000,
      labor: 400000,
    },

     ca_mau: {
      name: "Cà Mau",
      transport: 3000000,
      labor: 400000,
    },
    dong_thap: {
      name: "Đồng Tháp", 
      transport: 3000000,
      labor: 400000,
    },
    bac_lieu: {
      name: "Bạc Liêu",
      transport: 3500000,
      labor: 400000,
    },
    binh_thuan_1: {
      name: "Bình Thuận (Hàm Tân, Lagi, Phan Thiết)",
      transport: 1500000,
      labor: 300000,
    },
    binh_thuan_2: {
      name: "Bình Thuận (Tuy Phong, Bắc Bình, Hàm Thuận Bắc, Hàm Thuận Nam)",
      transport: 1700000,
      labor: 300000,
    },
    khanh_hoa_1: {
      name: "Khánh Hòa (Cam Ranh, Cam Lâm, Cam Thịnh Đông, Cam Thịnh Tây, Cam Đức, Nha Trang)",
      transport: 2000000,
      labor: 400000,
    },
    khanh_hoa_2: {
      name: "Khánh Hòa (Các huyện còn lại)",
      transport: 2000000,
      labor: 400000,
    },
    mien_trung: {
      name: "Huế/ Đà Nẵng/Quảng Nam/Quảng Trị",
      transport: 1000000,
      labor: 300000,
    },
    vung_tau: {
      name: "Vũng Tàu",
      transport: 1300000,
      labor: 300000,
    }
  },
};
// Cấu trúc giá cho từng dịch vụ
export const serviceConfig = {
  ctnh: {
    name: "Xử lý chất thải nguy hại",
    category: "waste",
    priceCalculator: {
      type: "complex",
      base100kg: true,
      transportFeeFromSecondTrip: true,
      wasteTypes: {
        normal: { threshold: 100 },
        light_bulb: { threshold: 5 },
        ma13: { threshold: 5 },
        ma14: { threshold: 5 },
      },
    },
    priceRules: {
      weightThreshold: 600,
      regions: {
        hcm: {
          name: "TP Hồ Chí Minh",
          weightThreshold: 600,
          below: {
            base100kg: 4498000,
            transportFee: 1283750,
            wasteTypes: {
              normal: 12000,
              light_bulb: 36000,
              ma13: 13000,
              ma14: 22000,
            },
          },
          above: {
            transportFee: 1583750,
            base100kg: 4498000,
            wasteTypes: {
              normal: 12000,
              light_bulb: 36000,
              ma13: 13000,
              ma14: 22000,
            },
          },
        },
        hcm_kcx: {
          name: "TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận",
          weightThreshold: 600,
          below: {
            base100kg: 4498000,
            transportFee: 1283750,
            wasteTypes: {
              normal: 12000,
              light_bulb: 36000,
              ma13: 13000,
              ma14: 22000,
            },
          },
          above: {
            transportFee: 1283750,
            wasteTypes: {
              normal: 12000,
              light_bulb: 36000,
              ma13: 13000,
              ma14: 22000,
            },
          },
        },
      },
    },
  },
  ctcn: {
    name: "Xử lý chất thải công nghiệp",
    category: "waste",
    priceCalculator: {
      type: "simple",
      weightField: "textile_weight",
      useBasePrice: true,
      transportFeeAllTrips: true,
    },
    priceRules: {
      weightThreshold: 2000,
      regions: {
        hcm: {
          name: "TP Hồ Chí Minh",
          below: {
            basePrice: 2500,
            transportFee: 1200000,
          },
          above: {
            basePrice: 2000,
            transportFee: 1200000,
          },
        },
      },
    },
  },
  ctcngd: {
    name: "Xử lý chất công nghiệp giày da",
    category: "waste",
    priceCalculator: {
      type: "simple",
      weightField: "shoe_leather_weight",
      useBasePrice: true,
      transportFeeAllTrips: true,
    },
    priceRules: {
      weightThreshold: 2000,
      regions: {
        hcm: {
          name: "TP Hồ Chí Minh",
          below: {
            basePrice: 2000,
            transportFee: 1200000,
          },
          above: {
            basePrice: 1800,
            transportFee: 1200000,
          },
        },
        hcm_kcx: {
          name: "TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận",
          below: {
            basePrice: 2000,
            transportFee: 1200000,
          },
          above: {
            basePrice: 1800,
            transportFee: 1200000,
          },
        },
        longan: {
          name: "Long An",
          below: {
            basePrice: 2200,
            transportFee: 1500000,
          },
          above: {
            basePrice: 2000,
            transportFee: 1500000,
          },
        },
        binhduong: {
          name: "Bình Dương",
          below: {
            basePrice: 2200,
            transportFee: 1500000,
          },
          above: {
            basePrice: 2000,
            transportFee: 1500000,
          },
        },
        dongnai: {
          name: "Đồng Nai",
          below: {
            basePrice: 2200,
            transportFee: 1500000,
          },
          above: {
            basePrice: 2000,
            transportFee: 1500000,
          },
        },
      },
    },
  },
  ctck: {
    name: "Xử lý chất thải cồng kềnh",
    category: "waste",
    priceCalculator: {
      type: "simple",
      weightField: "bulky_waste",
      useBasePrice: true,
      transportFeeAllTrips: true,
    },
    priceRules: {
      weightThreshold: 2000,
      regions: {
        hcm: {
          name: "TP Hồ Chí Minh",
          below: {
            basePrice: 2000,
            transportFee: 1200000,
          },
          above: {
            basePrice: 1800,
            transportFee: 1200000,
          },
        },
        hcm_kcx: {
          name: "TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận",
          below: {
            basePrice: 2000,
            transportFee: 1200000,
          },
          above: {
            basePrice: 1800,
            transportFee: 1200000,
          },
        },
        longan: {
          name: "Long An",
          below: {
            basePrice: 2200,
            transportFee: 1500000,
          },
          above: {
            basePrice: 2000,
            transportFee: 1500000,
          },
        },
        binhduong: {
          name: "Bình Dương",
          below: {
            basePrice: 2200,
            transportFee: 1500000,
          },
          above: {
            basePrice: 2000,
            transportFee: 1500000,
          },
        },
        dongnai: {
          name: "Đồng Nai",
          below: {
            basePrice: 2200,
            transportFee: 1500000,
          },
          above: {
            basePrice: 2000,
            transportFee: 1500000,
          },
        },
      },
    },
  },
  dtm: {
    name: "Báo cáo ĐTM",
    priceCalculator: {
      type: "authority_based",
      components: {
        analysis: true,
        transport: true,
        documentation: true,
        appraisal: true,
      },
    },
    priceRules: {
      department: {
        regions: {
          hcm: {
            name: "TPHCM (Các quận nội thành)",
            appraisal: 149000000,
            documentation: 25990000,
          },
 
        }
      },
      division: {
        regions: {
          hcm: {
            name: "TPHCM (Các quận nội thành)", 
            appraisal: 55000000,
            documentation: 15990000,
          },
       
        }
      }
    },
  },
  dkmt: {
    name: "Đăng ký môi trường",
    category: "environment_doc",
    priceCalculator: {
      type: "environmental_service",
      components: {
        documentation: true, // Chỉ tính phí thực hiện
        transport: false, // Không tính phí vận chuyển
        analysis: false, // Không tính phí phân tích mẫu
        appraisal: false, // Không tính phí thẩm định
      },
    },
    priceRules: {
      regions: {
        hcm: {
          name: "TP Hồ Chí Minh",
          documentation: 6900000,
        },
        hue: {
          name: "Huế",
          documentation: 5000000,
        },
        // Các khu vực khác: "Không thực hiện – Khuyến khích Hướng dẫn KH thực hiện theo video hướng dẫn thực hiện hồ sơ"
      },
    },
  },

  ptxnct: {
    name: "Hồ sơ phân tích xác nhận phân định chất thải công nghiệp",
    priceCalculator: {
      type: "environmental_service",
      components: {
        analysis: true,
        transport: true,
        documentation: true,
      },
    },
    priceRules: {
      regions: {
        hcm: {
          name: "TP Hồ Chí Minh",
          documentation: 5990000,
          analysis: { price: 2500000 },
        },
        binh_duong: {
          name: "Bình Dương",
          documentation: 5990000,
          analysis: { price: 2500000 },
        },
        dong_nai: {
          name: "Đồng Nai",
          documentation: 5990000,
          analysis: { price: 2500000 },
        },
        long_an: {
          name: "Long An",
          documentation: 5990000,
          analysis: { price: 2500000 },
        },
        tay_ninh: {
          name: "Tây Ninh",
          documentation: 5990000,
          analysis: { price: 2500000 },
        },
      },
    },
  },
  gpmt: {
    name: "Giấy phép môi trường",
    category: "environment_doc",
    priceCalculator: {
      type: "authority_based",
      components: {
        analysis: true,
        transport: true,
        appraisal: true,
        documentation: true,
      },
    },
    priceRules: {
      department: {
        regions: {
          hcm: {
            name: "TP Hồ Chí Minh",
            appraisal: 199000000,
            documentation: 25990000,
          },

        },
        note: "Các khu vực ngoài bảng giá này thỏa thuận với PPV",
      },
      division: {
        regions: {
          hcm: {
            name: "TP Hồ Chí Minh",
            appraisal: 55000000,
            documentation: 15990000,
          },
          // ... other district regions
        },
        note: "Các khu vực ngoài bảng giá này thỏa thuận với PPV trong trường hợp kí hợp đồng dịch vụ",
      },
    },
    notes: [
      "Chi phí phân tích: Căn cứ chi phí theo phụ lục 1",
      "Nhân công, vận chuyển: Căn cứ chi phí theo phụ lục 2",
    ],
  },
};
