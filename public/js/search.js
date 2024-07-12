const products = [
  {
    name: "CAS RW-2601P + RW-15",
    image: "plant/1.webp",
    link: "MK-CELLS_WEIGHBRIDGMK-CELLS_WEIGHBRIDGE_MK-E1005E_MK-E1005.html",
  },
  {
    name: "DINI ARGEO DFWKRP",
    image: "plant/2.webp",
    link: "DINI_ARGEO_DFWKRP.html",
  },
  {
    name: "CAS CASTON THZ",
    image: "plant/CAS CASTON THZ.webp",
    link: "CAS_CASTON_THZ.html",
  },
  {
    name: "MK-CELLS WEIGHBRIDGE MK-DI-01P",
    image: "plant/3.webp",
    link: "MK-CELLS_WEIGHBRIDGE_MK-DI-01P.html",
  },
  {
    name: "MK-CELLS TS-7 WEIGH BRIDGE",
    image: "plant/MK-CELLS TS-7.webp",
    link: "MK-CELLS_TS_7_Weigh_Bridge.html",
  },
  {
    name: "MK-CELLS WEIGHBRIDGE MK-E1005",
    image: "plant/4.webp",
    link: "MK-CELLS_WEIGHBRIDGE_MK-E1005.html",
  },

  //WareHouse
  {
    name: "CAS BENCH SCALE HDI",
    image: "warehouse/CAS BENCH SCALE HDI.webp",
    link: "CAS_BENCH_SCALE_HDI.html",
  },

  {
    name: "MK-CELLS 5P",
    image: "warehouse/MK CELLS 5P.webp",
    link: "MK-CELLS_5P.html",
  },

  {
    name: "MK-CELLS FLS",
    image: "warehouse/MK CELLS FLS.webp",
    link: "MK-CELLS_FLS.html",
  },

  {
    name: "SONIC A12E",
    image: "warehouse/SONIC 12E.webp",
    link: "SONIC_A12E.html",
  },

  {
    name: "MK-CELLS E-1005",
    image: "warehouse/MK CELLS E1005.webp",
    link: "MK-CELLS_E-1005.html",
  },
  // Animal
  {
    name: "GSC SGW 3015S",
    image: "animal/GSC SGW 3015S.webp",
    link: "GSC_SGW_3015S.html",
  },
  {
    name: "MK-CELLS CS-1",
    image: "animal/MK CELLS CS1.webp",
    link: "MK-CELLS_CS-1.html",
  },
  {
    name: "SABB A1GB3",
    image: "animal/SABB A1GB3.webp",
    link: "SABB_A1GB3.html",
  },
  {
    name: "SAYAKI A1-5DD HYBRID",
    image: "animal/SAYAKI A1-5DD.webp",
    link: "SAYAKI_A1-5DD_HYBRID.html",
  },
  {
    name: "SONIC BENCH SCALE T18",
    image: "animal/SONIC BENCH SCALE T18.webp",
    link: "SONIC_BENCH_SCALE_T18.html",
  },
  //fishery
  {
    name: "CAS CI-200SC",
    image: "fishery/CI-200SC-600x450.webp",
    link: "CAS_CI-200SC.html",
  },
  {
    name: "CAS CL-5500H",
    image: "fishery/CAS CL5500H.webp",
    link: "CAS_CL-5500H.html",
  },
  {
    name: "CAS SW-1WR",
    image: "fishery/SW-WR-600x450.webp",
    link: "CAS_SW-1WR.html",
  },
  {
    name: "SONIC SUPER SS",
    image: "fishery/SUPER-SS-600x450.webp",
    link: "SONIC_SUPER_SS.html",
  },
  {
    name: "SONIC T18",
    image: "fishery/SONIC T18.webp",
    link: "SONIC_T18.html",
  },
  //seaport
  {
    name: "SONIC GGE PRO",
    image: "seaport/SONIC GGE PRO.webp",
    link: "SONIC_GGE_PRO.html",
  },
  {
    name: "CAS CRANE SCALE C1-200A",
    image: "seaport/CAS CRANE SCALE CI 200A.webp",
    link: "CAS_CRANE_SCALE_C1-200A.html",
  },
  {
    name: "MK-CELLS WIRELESS CRANE SCALE E85",
    image: "seaport/MK CELLS WIRELESS CRANE SCALE.webp",
    link: "MK-CELLS_WIRELESS_CRANE_SCALE_E85.html",
  },
];

document.getElementById("search-item").addEventListener("input", function () {
  const query = this.value.toLowerCase();
  const resultsContainer = document.getElementById("searchResults");
  resultsContainer.innerHTML = "";

  if (query) {
    const filteredProducts = products.filter((product) =>
      product.name.toLowerCase().includes(query)
    );

    if (filteredProducts.length > 0) {
      resultsContainer.classList.add("active");
    } else {
      resultsContainer.classList.remove("active");
    }

    filteredProducts.forEach((product) => {
      const itemDiv = document.createElement("div");
      itemDiv.className = "result-item";
      itemDiv.innerHTML = `
                <a href="${product.link}" target="_blank">
                    <img src="${product.image}" alt="${product.name}">
                    <span>${product.name}</span> 
                 
                </a>
            `;
      resultsContainer.appendChild(itemDiv);
    });
  } else {
    resultsContainer.classList.remove("active");
  }
});
