import Home from '../pages/Home';

import Groups from '../pages/Groups';
import GroupDetail from '../pages/Groups/Detail';
import GroupForm from '../pages/Groups/Form';
import GroupList from '../pages/Groups/List';

import Courses from '../pages/Courses';
import CourseDetail from '../pages/Courses/Detail';
import CourseForm from '../pages/Courses/Form';
import CourseList from '../pages/Courses/List';

import Profile from '../pages/Profile';
import ProfilePersonalInfo from '../pages/Profile/PersonalInfo';
import ProfileAccountInfo from '../pages/Profile/AccountInfo';

export default [
  {
    path: '/',
    name: 'Home',
    component: Home,
    meta: { breadcrumb: 'Inicio' }
  },

  // Groups
  {
    path: '/grupos',
    component: Groups,

    children: [
      {
        path: '',
        name: 'Groups',
        component: GroupList,
        meta: { breadcrumb: 'Grupos' }
      },
      {
        path: 'crear',
        name: 'GroupCreate',
        component: GroupForm,
        meta: { breadcrumb: 'Crear' }
      }
    ]
  },
  {
    path: '/grupo/:groupId',
    name: 'GroupDetail',
    component: GroupDetail,
    meta: { breadcrumb: 'Grupo' },
    children: [
      {
        path: 'editar',
        name: 'GroupEdit',
        component: GroupForm,
        meta: { breadcrumb: 'Editar' },
        props: true
      }
    ]
  },

  // Courses
  {
    path: '/cursos',
    component: Courses,
    children: [
      {
        path: '',
        name: 'Courses',
        component: CourseList,
        meta: { breadcrumb: 'Cursos' }
      },
      {
        path: 'crear',
        name: 'CourseCreate',
        component: CourseForm,
        meta: { breadcrumb: 'Crear' }
      }
    ]
  },
  {
    path: '/curso/:courseId',
    name: 'CourseDetail',
    component: CourseDetail,
    meta: { breadcrumb: 'Curso' },
    children: [
      {
        path: 'editar',
        name: 'CourseEdit',
        component: CourseForm,
        meta: { breadcrumb: 'Editar' },
        props: true
      }
    ]
  },

  // Profile
  {
    path: '/perfil',
    name: 'Profile',
    component: Profile,
    meta: { breadcrumb: 'Perfil' },
    children: [
      {
        path: 'informacion-personal',
        name: 'ProfilePersonalInfo',
        component: ProfilePersonalInfo,
        meta: { breadcrumb: 'Información Personal' }
      },
      {
        path: 'informacion-cuenta',
        name: 'ProfileAccountInfo',
        component: ProfileAccountInfo,
        meta: { breadcrumb: 'Información de la Cuenta' }
      }
    ]
  }
  // {
  //   path: '*',
  //   component: NotFound
  // }
];
