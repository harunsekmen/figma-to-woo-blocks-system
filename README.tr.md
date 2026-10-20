# 🎨 FigmaToWoo · Yüksek Dönüşümlü Blok Tasarım Sistemi

[🇬🇧 English](README.md) · [🇹🇷 Türkçe](README.tr.md)

> Modern e-ticaret vitrinleri için hazırlanmış, Figma bileşenleriyle birebir uyumlu 15 modüler Gutenberg blok sistemi. Ağır sayfa oluşturuculara ihtiyaç duymadan piksel hassasiyetinde düzenler sunar.

Geliştirici ve Bakım Sorumlusu: **[Harun Sekmen](https://github.com/harunsekmen)** — E-Ticaret Sistem Mühendisi & WooCommerce Uzmanı.

[✉️ İletişime Geç](mailto:sekmenwp@gmail.com) · [💼 Upwork Profili](https://www.upwork.com/freelancers/~01a7a8b58043e6e6d9) · [🔗 GitHub Ana Profil](https://github.com/harunsekmen)

---

## 📸 Görsel Önizlemeler ve Yönetim Paneli

### 1. Figma Tasarımından WooCommerce Bloklarına Geçiş
Figma tasarım token'ları ile doğrudan eşleşen, dönüşüm odaklı ürün ızgarası ve hero blokları:

![FigmaToWoo Blok Vitrini](docs/assets/figma-blocks-showcase.png)

### 2. Blok Yapılandırması ve Canlı Düzenleme
WordPress blok düzenleyicisinde kolayca özelleştirilebilen temiz kodlu bileşenler:

![FigmaToWoo Düzenleyici Önizlemesi](docs/assets/figma-editor-preview.png)

---

## ⚡ Çözdüğü Kritik Sorun

Figma'da tasarlanan özel e-ticaret tasarımlarını WordPress'e aktarırken sıkça karşılaşılan sorunlar:
- **Tasarım Kayıpları:** Hazır temalar Figma'daki tipografi, boşluk ve mikro etkileşimleri birebir karşılayamaz.
- **Sayfa Oluşturucu Bağımlılığı:** Tasarımı tutturmak için Elementor veya Divi kurulduğunda sitenin DOM boyutu patlar ve hız skorları düşer.
- **Yönetim Zorluğu:** Ajans teslim ettikten sonra mağaza sahibi içerikleri güncellerken tasarımı bozar.

**FigmaToWoo**, Figma bileşenlerini doğrudan yerel WordPress bloklarına (Gutenberg) dönüştürür. Sıfır ek yük ile hem piksel doğruluğu hem de 95+ PageSpeed performansı sunar.

---

## 🛠️ Öne Çıkan Özellikler

- **15 E-Ticaret Bloğu:** Dönüşüm odaklı ürün ızgaraları, inceleme karuselleri, SSS akordeonları ve aciliyet sayaçları.
- **Figma Token Uyumluluğu:** Tipografi, renk değişkenleri ve boşluk değerleri CSS değişkenleriyle doğrudan eşleşir.
- **Sıfır Dış Bağımlılık:** jQuery veya harici dev kütüphaneler olmadan saf CSS ve modern vanilla JS mimarisi.
- **HPOS ve Tam WooCommerce Uyumu:** Sipariş ve ürün verilerini çekirdek WooCommerce API'leri üzerinden güvenle çeker.

---

## 🏗️ Teknik Mimari ve Standartlar

`PHP 8.1+` • `WordPress Block API` • `Vanilla ES6+` • `Modern CSS Custom Properties`

---

## 🚀 Kurulum ve Test

1. Eklentiyi klonlayın:
   ```bash
   git clone https://github.com/harunsekmen/figma-to-woo-blocks-system.git wp-content/plugins/figma-to-woo-blocks-system
   ```
2. Etkinleştirin ve test edin:
   ```bash
   wp plugin activate figma-to-woo-blocks-system
   php tests/test-figma.php
   ```

---

## 📄 Lisans

Bu proje **GPL-3.0 Lisansı** ile açık kaynak olarak sunulmaktadır.
