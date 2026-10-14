// One-time adaptation of the supplied Rayo About Us page. Do not rerun after manual edits.
const fs = require('node:fs');
const root = 'E:/laravel/common3/';
const read = p => fs.readFileSync(root + p, 'utf8');
const write = (p, s) => fs.writeFileSync(root + p, s);
const asset = p => `{{ asset('assets/front/${p}') }}`;
const bg = p => `style="background-image: url('${asset('img/common3/' + p)}');"`;
const theme = read('THEME/rayo-digital-agency-and-personal-portfolio-html-template/HTML/about-us.html').replaceAll('\r\n', '\n');
let main = theme.match(/<main[\s\S]*?<\/main>/)[0];
const section = name => new RegExp(`<!-- Section - ${name} Start -->[\\s\\S]*?<!-- Section - ${name} End -->`);
const home = read('resources/views/index2.blade.php');
main = main.replace(section('Blog Preview'), home.match(section('Blog Preview'))[0]);
main = main.replace(section('CTA'), "@include('layouts.partials.cta')");
main = main.replace('<span>Studio</span>', '<span>About Common3</span>');
main = main.replace('Driven by ideas and innovation', 'Three minds.<br><span class="common3-gradient-text">One common idea.</span>');
main = main.replace(/<!-- <p class="inner-headline__text[\s\S]*?<\/p> -->/, '<p class="inner-headline__text t-large t-bright loading__item">A social media and creative agency built by three founders with a shared vision. We turn ideas into content, identities and websites that give brands a clear voice.</p>');
main = main.replace('Innovations</p>', 'Shared vision</p>').replace('Excellence</p>', 'Clear communication</p>').replace('Experience</p>', 'Collaboration</p>').replace('Competence</p>', 'Care in every detail</p>');
const services = [
 ['Social Media Marketing','Strategy & page management','social-media-marketing.png'],
 ['Brand Identity','A consistent brand voice','brand-identity.png'],
 ['Content Creation','Ideas for your audience','content-creation.png'],
 ['Web Development','Your home on the web','web-development.png'],
 ['Video Editing','Reels, motion & long-form','video-editing.png'],
 ['Graphic Design','Visuals that tell your story','graphic-design.png'],
 ['Videography','Stories through the lens','videography.png']
];
const listNames = ['Web design','IU/UX','App design','Development','Branding','Motion'];
listNames.forEach((name, i) => { main = main.replace(`<p class="t-small anim-uni-in-up">${name}</p>`, `<p class="t-small anim-uni-in-up">${services[i][0]}</p>`); });
main = main.replace('<p class="t-small anim-uni-in-up">Graphic Design</p>\n                              </li>', '<p class="t-small anim-uni-in-up">Graphic Design</p>\n                              </li>');
// Add the seventh service to the existing values list.
main = main.replace(/(<p class="t-small anim-uni-in-up">Graphic Design<\/p>\s*<\/li>)/, '$1\n                              <li><p class="t-small anim-uni-in-up">Videography</p></li>');
main = main.replace(/We are a creative digital agency specializing\s+in innovative design and cutting-edge development\. We help businesses stand out and\s+thrive in the modern landscape\./, 'Common3 began with three people who think alike and bring different skills to the table. Social media is at the heart of what we do. Together, we plan, design, film, edit and build a connected presence for your brand.');
main = main.replace('image-values-1 parallax-img-small"', `image-values-1 parallax-img-small" ${bg('web/three-minds.webp')} role="img" aria-label="Common3 three minds brand artwork"`);
main = main.replace('image-values-2 parallax-img-small"', `image-values-2 parallax-img-small" ${bg('teamTogether.png')} role="img" aria-label="The Common3 team together"`);
['Design','Development','Branding','eCommerce','Mobile Apps'].forEach((word, i) => { main = main.replace(`<p class="marquee__text">${word}</p>`, `<p class="marquee__text">${['Social Media','Content','Brand Identity','Web Development','Video'][i]}</p>`); });
main = main.replace('divider-image-8 parallax-img"', `divider-image-8 parallax-img common3-team-divider" style="background-image: url('${asset('img/common3/teamTogether.png')}'); background-position: center top !important;" role="img" aria-label="Common3 team"`);
main = main.replace('divider-image-9 parallax-img"', `divider-image-9 parallax-img" ${bg('bg3.png')} role="img" aria-label="Common3 brand gradient artwork"`);

let capabilities = main.match(section('Awards & Publications List'))[0];
const row = capabilities.match(/<a class="mxd-awards-list__item[\s\S]*?<\/a>/)[0];
const rows = services.map(([name, detail, image], i) => row
 .replace('href="https://medium.com/" target="_blank"', 'href="{{ route(\'contact\') }}"')
 .replace('https://dummyimage.com/600x600/5d5d5d/838383', asset('img/common3/transparent/' + image))
 .replace('alt="Project Preview"', `alt="${name} illustration"`)
 .replace('Some article on Medium', name).replace('UI/UX design', detail).replace('<p class="t-small">Development</p>', '<p class="t-small">Common3</p>')
 .replace('<p class="t-small">2026</p>', `<p class="t-small">0${i + 1}</p>`)).join('\n');
capabilities = capabilities.replace(/<a class="mxd-awards-list__item[\s\S]*?<\/a>/g, '');
capabilities = capabilities.replace('<div class="mxd-awards-list hover-reveal">', `<div class="mxd-awards-list hover-reveal">${rows}`)
 .replace('Awards &<br>publications', 'What we<br><span class="common3-gradient-text">do.</span>')
 .replace('href="blog-standard.html"', 'href="{{ route(\'contact\') }}"').replace('View More', 'Discuss your project');
main = main.replace(section('Awards & Publications List'), capabilities);

let galleryIndex = 0;
const gallery = ['mathtrix-case-study.png','cims-case-study.png','rills-attendance-case-study.png','cims-website-case-study.png','gymnasium-case-study.png','burgher-case-study.png','web/stop-the-scroll.webp','web/make-every-click-count.webp'];
main = main.replace(/src="https:\/\/dummyimage.com\/1200x1000\/4d4d4d\/838383" alt="Image"/g, () => { const file = gallery[galleryIndex++ % gallery.length]; return `src="${asset('img/common3/' + file)}" alt="Common3 creative work" loading="lazy"`; });
main = main.replaceAll('Inspiring<br>ideas', 'Common<br>ideas').replaceAll('Creative<br>minds', 'Three<br>minds');

let team = main.match(section('Team Leaders'))[0];
const founderCard = team.match(/<div class="col-12 col-md-6 mxd-team-cards__item[\s\S]*?<\/div>\s*<\/div>\s*<!-- single card -->/)[0].replace(/\s*<!-- single card -->$/, '');
const founders = [
 ['Talha Arfan','Web Developer · Social Media Manager · Graphic Designer','web-development.png'],
 ['Muhammad Butt','Content Creator · Videographer · Meta Ads Specialist','content-creation.png'],
 ['Syed Ali Haider','Reels · Motion Graphics · Long-form Video Editor','video-editing.png']
];
const founderCards = founders.map(([name, role, file]) => founderCard.replace('col-md-6', 'col-md-4')
 .replace('mxd-team-cards__photo"', 'mxd-team-cards__photo bg-base-tint"')
 .replace('https://dummyimage.com/800x920/4d4d4d/838383', asset('img/common3/transparent/' + file))
 .replace('alt=""', `alt="${role.split(' · ')[0]} illustration" style="object-fit: contain;" loading="lazy"`)
 .replace(/<div class="mxd-team-cards__socials">[\s\S]*?<\/div>/, '')
 .replace('Helen Pineapple', name).replace('Founder, SEO', `Co-founder<br>${role}`)).join('\n');
const cardsStart = team.indexOf('<!-- single card -->');
const cardsEnd = team.indexOf('\n                      </div>\n                    </div>\n                  </div>\n                  <!-- item title -->', cardsStart);
if (cardsEnd < 0) throw new Error('Theme team card boundary not found');
team = team.slice(0, cardsStart) + founderCards + team.slice(cardsEnd);
team = team.replace('col-12 col-xl-8', 'col-12 col-xl-9').replace('col-12 col-xl-4 mxd-team-cards__item', 'col-12 col-xl-3 mxd-team-cards__item')
 .replace('Creative leaders', 'Meet the<br><span class="common3-gradient-text">three.</span>')
 .replace(/Technical experts dedicated to delivering flawless,\s+high-performing digital experiences\./, 'Three founders. Complementary skills. One shared direction. You work with the people who shape your ideas and bring them to life.')
 .replace('href="team.html"', 'href="{{ route(\'contact\') }}"').replace('Meet our team', 'Work with us');
main = main.replace(section('Team Leaders'), team);

['3','7','1','Social'].forEach((value,i) => { main = main.replace(new RegExp(`(<p id="stats-counter-${i+1}"[^>]*>)0`), `$1${value}`); });
main = main.replace('Happy clients who<br>trust our work', 'Founders with<br>a common vision')
 .replace('Clients come back for<br>a new projects', 'Creative services<br>under one roof')
 .replace('Years of professional experience in designing digital products', 'Connected team, from your first idea to the final delivery')
 .replace('Successfully<br>completed projects', 'At the heart of<br>everything we create');
main = main.replaceAll('href="works-masonry.html"', 'href="{{ route(\'index2\') }}#common3-work"')
 .replaceAll('href="pricing.html"', 'href="{{ route(\'contact\') }}"').replace('<span class="btn-caption">Pricing</span>', '<span class="btn-caption">Let\'s talk</span>');
const statImages = ['social-media-marketing.png','brand-identity.png','web-development.png','content-creation.png']; let statIndex = 0;
main = main.replace(/src="https:\/\/dummyimage.com\/800x800\/5d5d5d\/838383" alt="Illustration"/g, () => `src="${asset('img/common3/transparent/' + statImages[statIndex++])}" alt="Common3 service illustration" loading="lazy"`);
main = main.replaceAll('src="https://dummyimage.com/300x300/4d4d4d/838383" alt="Avatar"', `src="${asset('img/common3/web/logo.webp')}" alt="Common3"`);

const principles = [
 ['Perfection','Listen first','We start with your brand, your audience and what you want to achieve. A clear brief gives every idea a purpose.'],
 ['Innovative','Plan with purpose','We shape content themes, visual direction and a practical plan before production begins. Your brand stays consistent across every touchpoint.'],
 ['Expertise','Create together','Design, filming, editing and development work together. Each founder brings their craft, with feedback built into the process.'],
 ['Full-Cycle services','Make it work','We refine the details, prepare content for the right formats and build websites that are easy to use across devices.'],
 ['Client Success','Keep improving','After launch, we review what resonates with your audience and use those insights to guide the next round of work.']
];
let approach = main.match(section('Approach and Philosophy'))[0]; let principleIndex = 0;
approach = approach.replace(/(<div class="mxd-approach-list__title anim-uni-in-up">\s*<p>)[\s\S]*?(<\/p>)/g, (_,before,after) => before + principles[principleIndex++][1] + after);
principleIndex = 0;
approach = approach.replace(/(<div class="mxd-approach-list__descr anim-uni-in-up">\s*<p>)[\s\S]*?(<\/p>)/g, (_,before,after) => before + principles[principleIndex++][2] + after);
let iconIndex = 0;
approach = approach.replace(/src="https:\/\/dummyimage.com\/100x100\/5d5d5d\/838383" alt="Icon"/g, () => `src="${asset('img/common3/transparent/' + statImages[iconIndex++ % 4])}" alt="" loading="lazy"`)
 .replace('Approach and philosophy','How we<br><span class="common3-gradient-text">work.</span>').replace('Mastership</p>', 'Collaboration</p>');
main = main.replace(section('Approach and Philosophy'), approach);
main = main.replaceAll('href="contact.html"', 'href="{{ route(\'contact\') }}"');
write('resources/views/about-us.blade.php', `@extends('layouts.front')\n@section('title', 'About Common3 | Three Minds. One Common Idea.')\n@section('description', 'Meet Common3: three founders bringing social media marketing, content, design, video and web development together for your brand.')\n@section('social-image', asset('assets/front/img/common3/teamTogether.png'))\n@push('styles')\n<style>\n  .headline-img-06::before { background-image: url('${asset('img/common3/teamTogether.png')}'); }\n</style>\n@endpush\n@section('content')\n${main}\n@endsection\n`);

for (const file of ['resources/views/index2.blade.php','resources/views/layouts/partials/header.blade.php','resources/views/layouts/partials/footer.blade.php']) {
 let content = read(file).replaceAll('href="about-us.html"', 'href="{{ route(\'about\') }}"');
 if (file.endsWith('index2.blade.php')) content = content.replace('<!-- Section - Projects', '<!-- Section - Projects');
 write(file, content);
}
// Add a real destination for the About page's Works button without changing the section.
let updatedHome = read('resources/views/index2.blade.php');
const workStart = updatedHome.indexOf('<!-- Section - Projects');
if (workStart >= 0 && !updatedHome.includes('id="common3-work"')) updatedHome = updatedHome.slice(0,workStart) + updatedHome.slice(workStart).replace('<div class="mxd-section', '<div id="common3-work" class="mxd-section');
write('resources/views/index2.blade.php', updatedHome);
