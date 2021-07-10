import Home from '../pages/Home';

import Groups from '../pages/Groups';
import GroupDetail from '../pages/Groups/Detail';
import GroupForm from '../pages/Groups/Form';
import GroupList from '../pages/Groups/List';

import Courses from '../pages/Courses';
import CourseDetail from '../pages/Courses/Detail';
import CourseForm from '../pages/Courses/Form';
import CourseList from '../pages/Courses/List';

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
    meta: { breadcrumb: 'Grupos' },
    children: [
      {
        path: '',
        name: 'Groups',
        component: GroupList
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
    meta: { breadcrumb: 'Cursos' },
    children: [
      {
        path: '',
        name: 'Courses',
        component: CourseList
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
  }
  // {
  //   path: '*',
  //   component: NotFound
  // }
];
