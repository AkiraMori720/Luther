import app from '@/app';
import '@/i18n/index';
import '@/utils/fv';
import '@/utils/directives';
import '@/oweb.custom';
import '@/routes';
import '@/gobl';
import launcher from '@/utils/launcher';

launcher(app).launch();
