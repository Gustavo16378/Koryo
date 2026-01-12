import './bootstrap';
import Alpine from 'alpinejs';

Alpine.store('menu', {
  aberto: false,
  toggle() {
    this.aberto = !this.aberto;
    console.log('Toggle!  Aberto:', this.aberto);
  },
  fechar() {
    this.aberto = false;
    console.log('Fechado! ');
  }
});

// Novo store só para navbar ativa
Alpine.store('nav', {
  active: null,
  // atlas/programs/books => products
  normalize(id) {
    if(id=='hero') return null;
    return ['atlas', 'programs', 'books'].includes(id) ? 'products' : id;
  },
  set(id) {
    this.active = this.normalize(id);
  },
  is(id) {
    return this.active === id;
  }
});

// Alpine component do spy (só desktop)
Alpine.data('sectionSpy', () => ({
  observer: null,
  init() {
    const isDesktop = window.matchMedia('(min-width: 768px)').matches;
    if (!isDesktop) return;

    // ids que você vai ter nas partials
    const ids = ['hero', 'welcome', 'atlas', 'programs', 'books', 'about', 'contact'];

    const els = ids
      .map(id => document.getElementById(id))
      .filter(Boolean);

    if (els.length === 0) return;

    this.observer = new IntersectionObserver((entries) => {
      const visible = entries
        .filter(e => e.isIntersecting)
        .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

      if (visible?.target?.id) {
        Alpine.store('nav').set(visible.target.id);
      }
    }, {
      root: null,
      // topo com header fixo; “-55%” ajuda a seção do meio ser a ativa
      rootMargin: '-90px 0px -55% 0px',
      threshold: [0.15, 0.25, 0.35, 0.5, 0.7]
    });

    els.forEach(el => this.observer.observe(el));
  }
}));

Alpine.data('simpleFadeCarousel', ({ interval = 5000, count = 3 } = {}) => ({
  interval,
  count,
  active: 0,
  timer: null,

  init() {
    this.timer = setInterval(() => {
      this.active = (this.active + 1) % this.count;
    }, this.interval);
  },

  isActive(i) {
    return this.active === i;
  },
}));


window.Alpine = Alpine;
Alpine.start();

console.log('✅ Alpine carregado!  Store:', Alpine.store('menu'));