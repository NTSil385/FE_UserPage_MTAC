// Định nghĩa các loại chất thải
export const WASTE_TYPES = {
    normal: {
        name: 'Chất thải thông thường',
        field: 'normal_waste'
    },
    light_bulb: {
        name: 'Bóng đèn',
        field: 'light_bulb_weight'
    },
    ma13: {
        name: 'Mã 13',
        field: 'ma13_weight'
    },
    ma14: {
        name: 'Mã 14',
        field: 'ma14_weight'
    }
};

// Cấu trúc giá cho từng dịch vụ
export const serviceConfig = {
    'ctnh': {
        name: 'Xử lý chất thải nguy hại',
        priceCalculator: {
            type: 'complex',
            base100kg: true,
            transportFeeFromSecondTrip: true,
            wasteTypes: {
                normal: { threshold: 100 },
                light_bulb: { threshold: 5 },
                ma13: { threshold: 5 },
                ma14: { threshold: 5 }
            }
        },
        priceRules: {
            regions: {
                'hcm': {
                    name: 'TP Hồ Chí Minh',
                    weightThreshold: 600,
                    below: {
                        base100kg: 4498000,
                        transportFee: 1283750,
                        wasteTypes: {
                            normal: 12000,
                            light_bulb: 36000,
                            ma13: 13000,
                            ma14: 22000
                        }
                    },
                    above: {
                        transportFee: 1283750,
                        wasteTypes: {
                            normal: 12000,
                            light_bulb: 36000,
                            ma13: 13000,
                            ma14: 22000
                        }
                    }
                },
                'hcm_kcx': {
                    name: 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận',
                    weightThreshold: 600,
                    below: {
                        base100kg: 4498000,
                        transportFee: 1283750,
                        wasteTypes: {
                            normal: 12000,
                            light_bulb: 36000,
                            ma13: 13000,
                            ma14: 22000
                        }
                    },
                    above: {
                        transportFee: 1283750,
                        wasteTypes: {
                            normal: 12000,
                            light_bulb: 36000,
                            ma13: 13000,
                            ma14: 22000
                        }
                    }
                }
            }
        }
    },
    'ctcn': {
        name: 'Xử lý chất thải công nghiệp',
        priceCalculator: {
            type: 'simple',
            weightField: 'textile_weight',
            useBasePrice: true,
            transportFeeAllTrips: true
        },
        priceRules: {
            regions: {
                'hcm': {
                    name: 'TP Hồ Chí Minh',
                    weightThreshold: 2000,
                    below: {
                        basePrice: 2500,
                        transportFee: 1200000
                    },
                    above: {
                        basePrice: 2000,
                        transportFee: 1200000
                    }
                }
            }
        }
    },
    'ctck': {
        name: 'Xử lý chất thải cồng kềnh',
        priceCalculator: {
            type: 'simple',
            weightField: 'bulky_waste',
            useBasePrice: true,
            transportFeeAllTrips: true
        },
        priceRules: {
            weightThreshold: 2000,
            regions: {
                'hcm': {
                    name: 'TP Hồ Chí Minh',
                    below: {
                        basePrice: 2000,
                        transportFee: 1200000
                    },
                    above: {
                        basePrice: 1800,
                        transportFee: 1200000
                    }
                },
                'hcm_kcx': {
                    name: 'TP HCM: KCX Linh Trung 1,2 KCX Tân Thuận',
                    below: {
                        basePrice: 2000,
                        transportFee: 1200000
                    },
                    above: {
                        basePrice: 1800,
                        transportFee: 1200000
                    }
                },
                'longan': {
                    name: 'Long An',
                    below: {
                        basePrice: 2200,
                        transportFee: 1500000
                    },
                    above: {
                        basePrice: 2000,
                        transportFee: 1500000
                    }
                },
                'binhduong': {
                    name: 'Bình Dương',
                    below: {
                        basePrice: 2200,
                        transportFee: 1500000
                    },
                    above: {
                        basePrice: 2000,
                        transportFee: 1500000
                    }
                },
                'dongnai': {
                    name: 'Đồng Nai',
                    below: {
                        basePrice: 2200,
                        transportFee: 1500000
                    },
                    above: {
                        basePrice: 2000,
                        transportFee: 1500000
                    }
                }
            }
        }
    }
}; 