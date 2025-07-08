# 🧱 Gutenberg SEO Rebuild

> A performance-first WordPress rebuild using Gutenberg blocks — optimized for SEO, scalability, and Core Web Vitals.

## 📝 Project Overview

This project was a proactive rebuild of a legacy WordPress site originally built using Elementor. The goal was to resolve performance bottlenecks, improve SEO, and modernize the codebase for long-term maintainability.

I replaced the existing site with a fully custom Gutenberg-based theme using block.json configuration and semantic HTML — delivering better Lighthouse scores, cleaner markup, and significantly faster load times.

## 🎯 Goals

- Replace Elementor dependency with a lean Gutenberg-based architecture
- Improve SEO through semantic structure and clean metadata
- Increase performance and pass Core Web Vitals
- Improve accessibility and maintainability
- Empower future content editing using custom blocks

## ⚙️ Stack & Tools

- WordPress (theme development)
- Gutenberg (block.json API, ACF integration)
- PHP, SCSS, JavaScript (ES6)
- Lighthouse, WebPageTest, GTMetrix
- Schema.org markup and structured data

## 🚀 Results

| Metric            | Elementor Build | Gutenberg Rebuild |
|-------------------|-----------------|-------------------|
| **Lighthouse SEO**| 72              | 96+               |
| **Performance**   | 55              | 90+               |
| **DOM Nodes**     | ~3,000+         | ~800              |
| **Load Time**     | ~4.5s           | ~0.8s             |

- ✅ Clean semantic HTML5 structure
- ✅ Reduced render-blocking resources
- ✅ Custom blocks with clear separation of content and layout
- ✅ Ready-to-deploy codebase (repo only; not used in production due to internal direction)

## 🤷‍♂️ Why It Wasn’t Used

Despite the improvements, the rebuild wasn’t deployed due to non-technical leadership’s preference to continue using Elementor for visual editing. The project remains a complete and fully-functional proof-of-concept.

## 📚 Learnings

- Leadership alignment is as critical as technical correctness
- Building for scale, performance, and SEO requires intention at every layer
- Even unused, proactive builds like this become excellent developer case studies

## 📂 Screenshots & Docs

See `/docs` folder for:
- Lighthouse reports
- Block structure examples
- Theme layout screenshots

## 📄 License

This project is licensed under the [GPL-2.0-or-later](LICENSE) license to maintain WordPress compatibility.
