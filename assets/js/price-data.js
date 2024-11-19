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
  },
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
            transportFee: 1283750,
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
    category: "environment_doc",
    priceCalculator: {
      type: "environmental_service",
      components: {
        analysis: true,
        transport: true,
        documentation: true,
        appraisal: true,
      },
    },
    priceRules: {
      regions: {
        hcm_inner: {
          name: "TPHCM (Các quận nội thành)",
          appraisal: 149000000,
          documentation: 25990000,
        },
        hcm_outer: {
          name: "TPHCM - các huyện",
          appraisal: 149000000,
          documentation: 25990000,
        },
        hcm_cg: {
          name: "TPHCM - Cần giờ",
          appraisal: 149000000,
          documentation: 25990000,
        },
        longan_mkkt: {
          name: "Long An - Mộc Hóa, Kiến Tường",
          appraisal: 149000000,
          documentation: 25990000,
        },
        longan_other: {
          name: "Long An - còn lại",
          appraisal: 149000000,
          documentation: 25990000,
        },
        dongnai_bh: {
          name: "Đồng Nai - Biên Hòa",
          appraisal: 149000000,
          documentation: 25990000,
        },
        dongnai_tbltn: {
          name: "Đồng Nai - Trảng Bom, Long Thành, Nhn Trạch",
          appraisal: 149000000,
          documentation: 25990000,
        },
        dongnai_other: {
          name: "Đồng Nai - Còn lại",
          appraisal: 149000000,
          documentation: 25990000,
        },
        binhduong_main: {
          name: "Bình Dương - Thuận An, Dĩ An, Thủ Dầu Một",
          appraisal: 149000000,
          documentation: 25990000,
        },
        binhduong_other: {
          name: "Bình Dương - còn lại",
          appraisal: 149000000,
          documentation: 25990000,
        },
        tayninh: {
          name: "Tây Ninh",
          appraisal: 149000000,
          documentation: 25990000,
        },
        tiengiang: {
          name: "Tiền Giang",
          appraisal: 149000000,
          documentation: 25990000,
        },
        bentre: {
          name: "Bến Tre",
          appraisal: 149000000,
          documentation: 25990000,
        },
        vinhlong: {
          name: "Vĩnh Long",
          appraisal: 149000000,
          documentation: 25990000,
        },
        travinh: {
          name: "Trà Vinh",
          appraisal: 149000000,
          documentation: 25990000,
        },
        cantho: {
          name: "Cần Thơ",
          appraisal: 149000000,
          documentation: 25990000,
        },
        angiang: {
          name: "An Giang",
          appraisal: 149000000,
          documentation: 25990000,
        },
        kiengiang: {
          name: "Kiên Giang",
          appraisal: 149000000,
          documentation: 25990000,
        },
        haugiang: {
          name: "Hậu Giang",
          appraisal: 149000000,
          documentation: 25990000,
        },
        soctrang: {
          name: "Sóc Trăng",
          appraisal: 149000000,
          documentation: 25990000,
        },
      },
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
      type: "environmental_service",
      components: {
        analysis: true,
        transport: true,
        appraisal: true,
        documentation: true,
      },
    },
    priceRules: {
      province: {
        regions: {
          so_tnmt: {
            name: "Sở TNMT",
            appraisal: 199000000,
            documentation: 25990000,
          },
          // ... other province regions
        },
        note: "Các khu vực ngoài bảng giá này thỏa thuận với PPV",
      },
      district: {
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
